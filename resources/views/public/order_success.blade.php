@extends('layouts.master')


@section('content')

<main>
    <!-- Order  -->
    <div class="order">
        <div class="container">
            <!-- Form -->
            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                <div class="row justify-content-center">

                    <div class="col-lg-5">
                        <!-- Order Container -->
                        <div id="orderContainer" class="theiaStickySidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="subSum1" name="subSum1" value="0" />
                                    <input type="hidden" id="subSum2" name="subSum2" value="0" />
                                    <input type="hidden" id="subSum3" name="subSum3" value="0" />
                                    <input type="hidden" id="totalDue" name="totalDue" value="0" />
                                    <h2>Dear {{ $orderData->customer_first_name }}</h2>
                                    <h3>Your Order Was Successful</h3>
                                    <ul id="orderSumList">
                                        <li id="option1SingleSum"><strong><b>Product</b></strong> ________ {{ $orderData->product->product_name }}</li>
                                        <li id="option2SingleSum"><strong><b>Quantity</b></strong> ________ {{ $orderData->product_quantity }}</li>
                                        <li id="option3SingleSum"><strong><b>Unit Price</b></strong> ________ {{ $orderData->product->unite_price }}</li>
                                        {{-- <li id="extraOption1Sum"><strong><b></b></strong> ________ {{ $orderData->product->product_name }}</li> --}}
                                        <li id="extraOption2Sum"></li>
                                    </ul>

                                    <div id="totalError"></div>
                                </div>
                            </div>
                            <div class="row footer">
                                <div class="col-lg-12 text-center">
                                    <small>&copy; 2021 DimaluxuryH.</small>
                                </div>
                            </div>
                        </div>
                        <!-- Order Container End -->
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>
    <!-- Order End -->
</main>

@endsection
