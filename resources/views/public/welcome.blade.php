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
										<p><b>Unit Price ::</b> ₦ {{ $product->unite_price }} <br> <b>Current in Stock::</b> {{ $product->current_stock }}</p>
                                        <a href="#" class="btn-1 medium" data-toggle="modal" data-target="#staticBackdrop">Make Purchase</a>
                                        {{-- <button type="button" class="btn btn-primary" >
                                        Launch static backdrop modal
                                        </button> --}}
									</div>
								</a>
							</div>
                           <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">{{ $product->product_name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{ $product->product_details }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{ route('checkIn', $product->id) }}" class="btn-1 medium">Proceed</a>
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
