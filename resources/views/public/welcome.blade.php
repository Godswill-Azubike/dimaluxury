@extends('layouts.master')

@section('content')
    		<main>
			<!-- Hero -->
			<div class="hero-home bg-mockup">
				<div class="content">
					<h4>Hello My Neighbour!</h4>
					<p>You'r welcome to Dimaluxury Hair.</p>
					<a href="#order" class="btn-1 medium">Order Now</a>
				</div>
			</div>
			<!-- Hero End -->

			<!-- Services -->
			<div class="services">
				<div class="container">
					<div class="text-center">
						<h2>Our Products</h2>
						<div class="border-multiple">
							<span class="first"></span>
							<span class="second"></span>
							<span class="third"></span>
						</div>
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<p class="lead">🍒Luxury Virgin Hairs for Every Woman ||
                                    🍒No Payment on delivery ||
                                    🍒Delivery 🌎 ||
                                    🍒Mon-Sat</p>
							</div>
						</div>
					</div>
					<div class="mt-5" id="order">
						<div class="row">
                            @forelse ($productData as $product)
                            <div class="col-lg-4">
								<a href="#" class="service-link">
									<div class="box text-center">
										<div class="icon d-flex align-items-end"><img src="{{ asset("img/female-hair-shape.png") }}" alt="" height="45"></div>
										<h3 class="service-title"><b>{{ $product->product_name }}</b></h3>
                                        {{-- <span class="badge bg-success text-white">{{ $product->Location }}</span> --}}
										<p><b>Unit Price ::</b> ₦ {{ Helper::your_money_format($product->unite_price) }} <br> <b>Current in Stock::</b> {{ $product->current_stock }}</p>
                                        <a href="#" class="btn-1 medium" data-toggle="modal" data-target="#staticBackdrop{{ $product->id }}">Make Purchase</a>
                                        {{-- <button type="button" class="btn btn-primary" >
                                        Launch static backdrop modal
                                        </button> --}}
									</div>
								</a>
							</div>
                           <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $product->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-body">

                                    <form method="POST" id="orderForm" name="orderForm" action="{{ route('checkOut', $product->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12" id="mainContent">
                                                <!-- Calculator Area -->
                                                <div id="optionGroup1" class="row option-box">
                                                    <div class="option-box-header">
                                                        <h3>{{ $product->product_name }}</h3>

                                                        <div class="price-box"><sup>₦</sup>{{ Helper::your_money_format($product->unite_price) }}</div>
                                                        <br><br>
                                                        {{ $product->product_details }}
                                                        {{-- <br> --}}
                                                    </div>
                                                    <div class="col-3 mt-2"><p>Quantity</p></div>
                                                    <div class="col-3 mb-2">
                                                        <input id="option1SingleQty" type="text" class="qty-input form-control" name="quantity" value="1" required/>
                                                    </div>

                                                </div>
                                                <!-- Personal Details -->
                                                <div id="personalDetails" class="row contact-box">
                                                    <div class="contact-box-header">
                                                        <h3>Contact Details</h3>
                                                        <p>Please give VALID email to check Out.</p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="userName">First Name</label>
                                                            <input id="firstName" class="form-control" name="firstName" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">Last Name</label>
                                                            <input id="lastName" class="form-control" name="lastName" type="text" required required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number e.g.: +234</label>
                                                            <input id="phone" class="form-control" name="phone" type="number" data-parsley-pattern="^\+{1}[0-9]+$" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="address">Email</label>
                                                            <input id="email" class="form-control" name="email" type="email" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="inputMessage">Address</label>
                                                            <textarea class="form-control" id="inputMessage" name="address" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <button type="submit" class="btn-1 medium">Proceed to check out</button>
                                                    </div>
                                                </div>
                                                <!-- Personal Details End -->
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Form End -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {{-- <a href="{{ route('checkOut', $product->id) }}" class="btn-1 medium">Proceed</a> --}}
                                </div>
                                </div>
                            </div>
                            </div>
                            @empty

                            @endforelse
						</div>
					</div>
				</div>
			</div>
			<!-- Services End -->

		</main>
@endsection
