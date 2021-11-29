<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Helper\Helper;
use App\Models\Transactions;
use App\Mail\ConfirmedOrder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    //

    public static function get_random_str($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function indexPage()
    {
        return view('public.welcome', [
            'productData' => Product::where([['sales_status', true], ['current_stock', '>', 0]])->latest('updated_at')->simplePaginate(9),
        ]);
    }

    public function checkIn($id)
    {
        return view('public.check', ['productData' => Product::findOrFail($id)]);
    }

    public function checkOut(Request $request, $productId)
    {
        $request->validate([
            'quantity' => ['required', 'integer', 'max:11'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $getProduct = Product::findOrfail($productId);

        $orderRefreces = "TXN_REF_" . $this->get_random_str(55);

        // save order details to db
        $newOrder = new Order();
        $newOrder->product_quantity = $request->quantity;
        $newOrder->customer_first_name = $request->firstName;
        $newOrder->customer_last_name = $request->lastName;
        $newOrder->customer_email =  $request->email;
        $newOrder->customer_phone = $request->phone;
        $newOrder->customer_location = $request->address;
        $newOrder->product_id = $productId;
        $newOrder->refrences = $orderRefreces;
        $newOrder->save();

        return redirect()->route('checkOutPage', $orderRefreces);
    }

    public function checkOutPage($orderRefreces)
    {
        // get that particular order from the db by the order product id
        $currentOrder = Order::firstWhere("refrences", $orderRefreces);

        return view('public.checkout', ['orderData' => $currentOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function callBack(Request $request)
    {
        $status = $request->status;
        $txn_ref = $request->tx_ref;

        $get_payment = Order::firstWhere('refrences', $txn_ref);

        if ($get_payment->refrences == $txn_ref) {
            if ($status == 'successful') {
                $get_payment->is_paid = true;
                $get_payment->save();
                // save to trasaction history
                $transaction = new Transactions();
                $transaction->txn_ref = $txn_ref;
                $transaction->amount_paid = $get_payment->product->unite_price * $get_payment->product_quantity;
                $transaction->order_id = $get_payment->id;
                $transaction->save();
                // publish to history
                // send user and admin an email
                // send a fund email to this customer
                Mail::to($get_payment->customer_email)->send(new ConfirmedOrder($get_payment));

                return redirect()->route('paymentSuccess', $request->tx_ref);
            } elseif ($status == 'cancelled') {
                return redirect()->route('checkOutPage', $request->tx_ref)
                    ->with('warning', 'Hey!! ' . ', we are very sorry the payment was cancelled. You can click on the Make Payment button to try again or contact us for alternative means of payment. ');
            } else {
                return redirect()->route('checkOutPage', $request->tx_ref)
                    ->with('warning', 'Hey!! ' . ', looks like something might have interupted the payment process. Your transaction reference is ' . $get_payment->tx_ref);
            }
        } else {
            return redirect()->route('checkOutPage', $request->tx_ref)
                ->with('warning', 'Hey!! ' . 'this transaction have been manupulated some how. (transaction reference ' . $get_payment->tx_ref . ') Please contact the admin for support.');
        }
    }

    public function paymentSuccess($orderRefreces)
    {
        // get that particular order from the db by the order product id
        $currentOrder = Order::firstWhere("refrences", $orderRefreces);

        return view('public.order_success', ['orderData' => $currentOrder]);
    }
}
