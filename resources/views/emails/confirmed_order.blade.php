<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<title>DimaluxuryH</title>
	<!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
</head>

<!-- BODY -->

<body bgcolor="#F0F0F0" text="#000000" style="
	border-collapse: collapse;
	border-spacing: 0;
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	-webkit-font-smoothing: antialiased;
	text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
	line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;">

	<!-- SECTION / BACKGROUND -->
	<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;">
		<tr>
			<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;" bgcolor="#F0F0F0">

				<!-- WRAPPER -->
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="560" style="
					border-collapse: collapse;
					border-spacing: 0;
					padding: 0;
					width: inherit;
					max-width: 560px;">

					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
                            font-size: 16px;
                            font-weight: 400;
                            line-height: 160%;
                            font-family: 'Poppins', Helvetica, sans-serif;
							margin: 0;
							padding: 0;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							padding-top: 20px;
							padding-bottom: 20px;">
                           <b style="color: #ff7b79;"> <span style="color: black;">Dima</span>luxuryH </B>
						</td>
					</tr>
				</table><!-- END OF WRAPPER -->

				<!-- WRAPPER / CONTAINER -->
				<table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" width="560" style="
					border-collapse: collapse;
					border-spacing: 0;
					padding: 0;
					width: inherit;
					max-width: 560px;">

					<!-- HEADER -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							font-size: 24px;
							font-weight: bold;
							line-height: 130%;
							padding-top: 25px;
							color: #000000;
							font-family: 'Poppins', Helvetica, sans-serif;">
							Order Confirmed
						</td>
					</tr>

					<!-- SUBHEADER -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-bottom: 3px;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							font-size: 18px;
							font-weight: 300;
							line-height: 150%;
							padding-top: 5px; color: #000000;
							font-family: 'Poppins', Helvetica, sans-serif;">
							Your order was successfully submitted. Thank you.
						</td>
					</tr>

					<!-- HERO IMAGE -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-top: 20px;">
							<a href="#" target="_blank" style="text-decoration: none;">
								<img border="0" vspace="0" hspace="0" src="{{ asset('img/female-hair-shape.png') }}"
								 alt="Please enable images to view this content" title="Hero Image" width="100" height="100" style="

									font-size: 13px;
									margin: 0;
									padding: 0;
									outline: none;
									text-decoration: none;
									-ms-interpolation-mode: bicubic;
									border: none;
									display: block;" />
							</a>
						</td>
					</tr>

					<!-- LIST -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%;">
							<table align="center" border="0" cellspacing="0" cellpadding="0" style="width: inherit; margin: 0; padding: 0; border-collapse: collapse; border-spacing: 0;">

								<!-- LIST ITEM 1 -->
								<tr>

									<!-- LIST ITEM 1 IMAGE -->
									<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
									<td align="left" valign="top" style="
										border-collapse: collapse;
										border-spacing: 0;
										padding-top: 30px;
										padding-right: 20px;">
										<img border="0" vspace="0" hspace="0" style="
											padding: 0;
											margin: 0;
											outline: none;
											text-decoration: none;
											-ms-interpolation-mode: bicubic;
											border: none; display: block;
											color: #000000;"
										 src="{{ asset('img/icon-cart.png') }}" alt="Budget" title="Budget"
										 width="20" height="20" />
									</td>

									<!-- LIST ITEM 1 TEXT -->
									<td align="left" valign="top" style="
										font-size: 16px;
										font-weight: 400;
										line-height: 160%;
										border-collapse: collapse;
										border-spacing: 0;
										margin: 0;
										padding: 0;
										padding-top: 25px;
										color: #000000;
										font-family: 'Poppins', Helvetica, sans-serif;">
										Dear <b style="color: #333333;">{{ $order->customer_first_name }} {{ $order->customer_last_name }}</b>,
										We've gotten your order of <b>{{ $order->product->product_name }}</b>. <br />
                                        <b>Quantity</b>: _____ {{ $order->product_quantity }} <br />
                                        <b>Total Cost</b>: _____ ₦{{ Helper::your_money_format($order->product->unite_price * $order->product_quantity) }} <br />
                                        We will reach out to you soon.
									</td>

								</tr><!-- END OF LIST ITEM 1 -->

							</table>
						</td>
					</tr>

					<!-- LINE -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							padding-top: 25px;">
							<hr align="center" style="
								margin: 0;
								padding: 0;
								width: 100%;
								border: 1px solid #E0E0E0;" />
						</td>
					</tr>

					<!-- PARAGRAPH -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							font-size: 16px;
							font-weight: 400;
							line-height: 160%;
							padding-top: 20px;
							padding-bottom: 25px;
							color: #000000;
							font-family: 'Poppins', Helvetica, sans-serif;">
							Have a question?
							<a href="mailto:support@dimaluxuryH.com" target="_blank" style="
								color: #000;
								font-size: 16px;
								font-weight: 400;
								line-height: 160%;">
								support@dimaluxuryH.com
							</a>
						</td>
					</tr>

				</table><!-- END OF WRAPPER -->

				<!-- WRAPPER -->
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="560" style="
					border-collapse: collapse;
					border-spacing: 0;
					padding: 0;
					width: inherit;
					max-width: 560px;">

					<!-- SOCIAL -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse: collapse;
							border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-top: 25px;">
							<table width="256" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; border-spacing: 0; padding: 0;">
								<tr>

									<!-- ICON 1 -->
									<td align="center" valign="middle" style="
										margin: 0;
										padding: 0;
										border-collapse: collapse;
										border-spacing: 0;">
										<a href="#" target="_blank" style="text-decoration: none;">
											<img border="0" vspace="0" hspace="0" style="
												padding: 0;
												margin: 0;
												outline: none;
												text-decoration: none;
												-ms-interpolation-mode: bicubic;
												border: none;
												display: inline-block;
												color: #000000;"
											 alt="F" title="Facebook" width="20" height="20" src="{{ asset('img/facebook.png') }}" />
										</a>
                                        &nbsp;&nbsp;
                                        <a href="#" target="_blank" style="text-decoration: none;">
											<img border="0" vspace="0" hspace="0" style="
												padding: 0;
												margin: 0;
												outline: none;
												text-decoration: none;
												-ms-interpolation-mode: bicubic;
												border: none;
												display: inline-block;
												color: #000000;"
											 alt="T" title="Instagram" width="20" height="20" src="{{ asset('img/instagram.png') }}" />
										</a>
									</td>

								</tr>
							</table>
						</td>
					</tr><!-- END OF SOCIAL -->

					<!-- FOOTER -->
					<tr>
						<td align="center" valign="top" style="
							border-collapse:
							collapse; border-spacing: 0;
							margin: 0;
							padding: 0;
							padding-left: 6.25%;
							padding-right: 6.25%;
							width: 87.5%;
							font-size: 13px;
							font-weight: 400;
							line-height: 150%;
							padding-top: 20px;
							padding-bottom: 20px;
							color: #999999;
							font-family: sans-serif;">
							&copy; 2021 <b>DimaluxuryH</b>.
							<a href="{{ route('welcome') }}" target="_blank" style="
								text-decoration: underline;
								color: #000;
								font-size: 13px;
								font-weight: 400;
								line-height: 150%;">
								Visit our website here
							</a>

						</td>
					</tr>

				</table><!-- END OF WRAPPER -->

			</td><!-- END OF SECTION / BACKGROUND -->

		</tr>

	</table>

</body>

</html>
