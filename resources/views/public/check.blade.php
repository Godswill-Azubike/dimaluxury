@extends('layouts.master')


@section('content')

    <!-- Sub Header -->
		<div class="sub-header">
			<div class="container">
				<h1>{{ $productData->product_name }}</h1>
			</div>
		</div>
		<!-- Sub Header End -->

		<main>
			<!-- Order  -->
			<div class="order">
				<div class="container">
					<!-- Form -->
					<form method="POST" id="orderForm" name="orderForm" action="php/send_order_2_attached_pdf.php.html">
						<div class="row">
							<div class="col-lg-8" id="mainContent">
								<!-- Calculator Area -->
								<div id="optionGroup1" class="row option-box">
									<div class="price-box"><sup>₦</sup>{{ $productData->unite_price }}</div>
									<div class="option-box-header">
										<h3>{{ $productData->product_name }}</h3>
										<p>
											Subtitle or short description can be set here.
											<a href="javascript:;" id="openImage1" class="option-box-link">Image</a>
										</p>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="row">
											<div class="col-4">
												<input id="option1SingleQty" type="text" class="qty-input form-control" name="optionGroup1Qty" value="1" />
											</div>
										</div>
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
											<input id="firstName" class="form-control" name="username" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required />
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label for="email">Last Name</label>
											<input id="lastName" class="form-control" name="text" type="email" required />
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label for="phone">Phone Number e.g.: +234</label>
											<input id="phone" class="form-control" name="phone" type="number" data-parsley-pattern="^\+{1}[0-9]+$" />
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<label for="address">Email</label>
											<input id="email" class="form-control" name="address" type="email" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="inputMessage">Address</label>
											<textarea class="form-control" id="inputMessage" name="message" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$"></textarea>
										</div>
									</div>
								</div>
								<!-- Personal Details End -->
							</div>
							<div class="col-lg-4" id="sidebar">
								<!-- Order Container -->
								<div id="orderContainer" class="theiaStickySidebar">
									<div class="row">
										<div class="col-md-12">
											<input type="hidden" id="subSum1" name="subSum1" value="0" />
											<input type="hidden" id="subSum2" name="subSum2" value="0" />
											<input type="hidden" id="subSum3" name="subSum3" value="0" />
											<input type="hidden" id="totalDue" name="totalDue" value="0" />
											<h3>Order Summary</h3>
											<ul id="orderSumList">
												<li id="option1SingleSum"></li>
												<li id="option2SingleSum"></li>
												<li id="option3SingleSum"></li>
												<li id="extraOption1Sum"></li>
												<li id="extraOption2Sum"></li>
											</ul>
											<div class="row total-container">
												<div class="col-6 p-0">
													<input type="text" id="totalTitle" class="summaryInput" name="totallabel" value="" disabled />
												</div>
												<div class="col-6 p-0">
													<input type="text" id="total" class="summaryInput" name="total" value="0" data-parsley-errors-container="#totalError" data-parsley-empty-order=""
														disabled />
												</div>
											</div>
											<div id="totalError"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="checkbox" id="cbx" class="inp-cbx" name="terms" value="yes" required />
												<label class="cbx terms" for="cbx">
													<span>
														<svg width="12px" height="10px" viewbox="0 0 12 10">
															<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
														</svg>
													</span>
													<span>Accept<a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
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
									<div class="row">
										<div class="col-lg-12">
											<button type="button" name="reset" id="resetBtn" class="btn-form-func btn-form-func-alt-color">
												<span class="btn-form-func-content">RESET</span>
												<span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
											</button>
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
