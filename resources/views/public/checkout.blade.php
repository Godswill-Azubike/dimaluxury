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
											<h3>Your Order Summary</h3>
											<ul id="orderSumList">
												<li id="option1SingleSum"><strong><b>Product</b></strong> ________ {{ $orderData->product->product_name }}</li>
												<li id="option2SingleSum"></li>
												<li id="option3SingleSum"></li>
												<li id="extraOption1Sum"></li>
												<li id="extraOption2Sum"></li>
											</ul>
											<div class="row total-container">
												<div class="col-6 p-0">
													{{-- <input type="text" id="totalTitle" class="summaryInput" name="totallabel" value="Total" disabled /> --}}
                                                    <Strong>Total</Strong>
												</div>
												<div class="col-6 p-0">
													{{-- <input type="text" id="total" class="summaryInput" name="total" value="{{ $orderData->product->unite_price * $orderData->product_quantity }}" data-parsley-errors-container="#totalError" data-parsley-empty-order="" --}}
														{{-- disabled /> --}}
                                                        <Strong>{{ $orderData->product->unite_price * $orderData->product_quantity }}</Strong>
												</div>
											</div>
											<div id="totalError"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
                                            <input type="hidden" name="public_key" value="FLWPUBK_TEST-cce095f44ba9a165cb2df7ee80ceeffc-X" />
                                            {{-- <input type="hidden" name="public_key" value="FLWPUBK-70a340ebcc8fc3edf176c6e839cbdb4a-X" /> --}}
                                            <input type="hidden" name="customer[email]" value="{{ $orderData->customer_email }}" />
                                            <input type="hidden" name="customer[phone_number]" value="{{ $orderData->customer_phone }}" />
                                            <input type="hidden" name="customer[name]" value="{{ $orderData->customer_first_name }} {{ $orderData->customer_last_name }}" />
                                            <input type="hidden" name="tx_ref" value="{{ $orderData->refrences }}" />
                                            <input type="hidden" name="amount" value="{{ $orderData->product->unite_price * $orderData->product_quantity }}" />
                                            <input type="hidden" name="currency" value="NGN" />
                                            <input type="hidden" name="meta[token]" value="{{ $orderData->id }}{{ $orderData->product->id }}" />{{-- madeup of the order_id and the product_id --}}
                                            <input type="hidden" name="redirect_url" value="{{ route('callBack', $orderData->refrences) }}" />
											<div class="form-group">
												<input type="checkbox" id="cbx" class="inp-cbx" name="terms" value="yes" required checked/>
												<label class="cbx terms" for="cbx">
													<span>
														<svg width="12px" height="10px" viewbox="0 0 12 10">
															<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
														</svg>
													</span>
													<span>Accept<a href="#" class="terms-link" target="_blank">Terms</a>.</span>
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button type="submit" name="submit" class="btn-form-func">
												<span class="btn-form-func-content">SUBMIT</span>
												<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
											</button>
										</div>
									</div>
									{{-- <div class="row">
										<div class="col-lg-12">
											<button type="button" name="reset" id="resetBtn" class="btn-form-func btn-form-func-alt-color">
												<span class="btn-form-func-content">RESET</span>
												<span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
											</button>
										</div>
									</div> --}}
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
