<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="Responsive Admin Template">
	<meta name="author" content="SmartUniversity">
	<title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
	<!-- icons -->
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include_once 'templates/header.php'; ?>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
<?php include_once 'templates/sidebar.php'; ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Invoice</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								<li><a class="parent-item" href="">Extra</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Invoice</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="white-box">
								<h3><b>INVOICE</b> <span class="pull-right">#345766</span></h3>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="pull-left">
											<address>
												<img src="assets/img/invoice_logo.png" alt="logo" class="logo-default">
												<p class="text-muted m-l-5">
													Aditya Hotel, <br> Opp. Town Hall, <br>
													Sardar Patel Road, <br> Ahmedabad - 380015
												</p>
											</address>
										</div>
										<div class="pull-right text-right">
											<address>
												<p class="addr-font-h3">To,</p>
												<p class="font-bold addr-font-h4">Jayesh Patel</p>
												<p class="text-muted m-l-30">
													207, Prem Sagar Appt., <br> Near Income Tax Office, <br>
													Ashram Road, <br> Ahmedabad - 380057
												</p>
												<p class="m-t-30">
													<b>Invoice Date :</b> <i class="fa fa-calendar"></i> 14th
													July 2017
												</p>
											</address>
										</div>
									</div>
									<div class="col-md-12">
										<div class="table-responsive m-t-40">
											<table class="table table-hover">
												<thead>
													<tr>
														<th class="text-center">#</th>
														<th class="text-center">Date</th>
														<th class="text-center">Descriptions</th>
														<th class="text-center">Charges</th>
														<th class="text-center">No Of Days</th>
														<th class="text-center">Tax</th>
														<th class="text-right">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
														<td class="text-center">2016-11-19</td>
														<td class="text-center">Delux Room</td>
														<td class="text-center">$100</td>
														<td class="text-center">2</td>
														<td class="text-center">10%</td>
														<td class="text-right">$112</td>
													</tr>
													<tr>
														<td class="text-center">1</td>
														<td class="text-center">2016-11-19</td>
														<td class="text-center">Food and Taxi</td>
														<td class="text-center">$20</td>
														<td class="text-center">-</td>
														<td class="text-center">10%</td>
														<td class="text-right">$67</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-md-12">
										<div class="pull-right m-t-30 text-right">
											<p>Sub - Total amount: $179</p>
											<p>Discount : $10 </p>
											<p>Tax (10%) : $14 </p>
											<hr>
											<h3><b>Total :</b> $213</h3>
										</div>
										<div class="clearfix"></div>
										<hr>
										<div class="text-right">
											<button class="btn btn-danger" type="submit"> Proceed to payment </button>
											<button onclick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<?php include_once 'templates/settings.php'; ?>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php include_once 'templates/footer.php'; ?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/popper/popper.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
</body>
</html>