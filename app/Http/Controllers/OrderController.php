<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        return view('admin.orders', [
            'orderData' => Order::latest()->simplePaginate(20),
        ],);
        // return Product::latest()->get();
    }
}
