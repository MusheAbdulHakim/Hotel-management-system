﻿<!DOCTYPE html>
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
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include_once 'includes/header.php'; ?>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include_once 'includes/sidebar.php'; ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="panel-body">
									<h3>Orders</h3>
									<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
										<div class="progress-bar progress-bar-green width-60" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="text-small margin-top-10 full-width">14% higher than last month</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="panel-body">
									<h3>Monthly Sales</h3>
									<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
										<div class="progress-bar progress-bar-orange width-75" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="text-small margin-top-10 full-width">7% higher than last month</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="panel-body">
									<h3>New Users</h3>
									<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
										<div class="progress-bar progress-bar-purple width-40" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="text-small margin-top-10 full-width">34% higher than last month</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="panel-body">
									<h3>Collection</h3>
									<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
										<div class="progress-bar progress-bar-cyan width-60" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="text-small margin-top-10 full-width">20% higher than last month</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Income/Expense Report</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="bar-chart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Income/Expense Report</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<canvas id="myChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Room Details</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive tblHeightSet">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>#</th>
														<th>Type</th>
														<th>Details</th>
														<th>Rent</th>
														<th>status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>102</td>
														<td>Premier</td>
														<td>1 Queen-sized bed, arm chair</td>
														<td>$25</td>
														<td>
															<span class="label label-sm label-success">Available</span>
														</td>
													</tr>
													<tr>
														<td>202</td>
														<td>Deluxe</td>
														<td>1 Queen-sized bed, patio chairs</td>
														<td>$40</td>
														<td>
															<span class="label label-sm label-danger"> Booked </span>
														</td>
													</tr>
													<tr>
														<td>104</td>
														<td>Twin</td>
														<td>2 single-beds </td>
														<td>$45</td>
														<td>
															<span class="label label-sm label-success">Available</span>
														</td>
													</tr>
													<tr>
														<td>706</td>
														<td>Triple</td>
														<td>1 Queen-sized bed & 1 single bed</td>
														<td>$62</td>
														<td>
															<span class="label label-sm label-warning">Maintenance</span>
														</td>
													</tr>
													<tr>
														<td>102</td>
														<td>Premier</td>
														<td>1 Queen-sized bed, arm chair</td>
														<td>$25</td>
														<td>
															<span class="label label-sm label-success">Available</span>
														</td>
													</tr>
													<tr>
														<td>202</td>
														<td>Deluxe</td>
														<td>1 Queen-sized bed, patio chairs</td>
														<td>$40</td>
														<td>
															<span class="label label-sm label-danger"> Booked </span>
														</td>
													</tr>
													<tr>
														<td>104</td>
														<td>Twin</td>
														<td>2 single-beds </td>
														<td>$45</td>
														<td>
															<span class="label label-sm label-danger">Booked</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Employee List</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<ul class="empListWindow small-slimscroll-style">
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user1.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Rajesh Pandya</a>
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a>
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a>
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a>
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user5.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jacob Ryan</a>
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user6.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Megha Trivedi</a>
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Sarah Smith</a>
													</div>
													<div>
														<span class="clsAvailable">Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">John Deo</a>
													</div>
													<div>
														<span class="clsNotAvailable">Not Available</span>
													</div>
												</div>
											</li>
											<li>
												<div class="prog-avatar">
													<img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
												</div>
												<div class="details">
													<div class="title">
														<a href="#">Jay Soni</a>
													</div>
													<div>
														<span class="clsOnLeave">On Leave</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Sales</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">This Week</span>
											<h5 class="m-b-0">5,286</h5>
											<span><i class="material-icons text-success">trending_up</i>
												+28%</span>
										</div>
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">This Month</span>
											<h5 class="m-b-0">421</h5>
											<span><i class="material-icons text-danger">trending_down</i>
												-9%</span>
										</div>
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">Average</span>
											<h5 class="m-b-0">1081</h5>
											<span><i class="material-icons text-success">trending_up</i>
												+7%</span>
										</div>
									</div>
									<div id="sparkline28"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Earning</header>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">This Week</span>
											<h5 class="m-b-0">1,389</h5>
											<span><i class="material-icons text-success">trending_up</i>
												+21%</span>
										</div>
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">This Month</span>
											<h5 class="m-b-0">591</h5>
											<span><i class="material-icons text-danger">trending_down</i>
												-6.3%</span>
										</div>
										<div class="col-sm-4 col-4 m-b-10">
											<span class="text-muted">Average</span>
											<h5 class="m-b-0">781</h5>
											<span><i class="material-icons text-success">trending_up</i>
												+6%</span>
										</div>
									</div>
									<div id="sparkline29"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Salary Status</header>
								</div>
								<div class="card-body ">
									<div class="mdl-tabs mdl-js-tabs">
										<div class="mdl-tabs__tab-bar tab-left-side">
											<a href="#tab4-panel" class="mdl-tabs__tab tabs_three is-active">Managers</a>
											<a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Housekeeper</a>
											<a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a>
										</div>
										<div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user6.jpg" alt="">
															</td>
															<td>John Deo</td>
															<td>05-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>1200$</td>
															<td>#7234486</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user4.jpg" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>1400$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user2.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>1100$</td>
															<td>#7234454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<div class="full-width text-center p-t-10">
													<a href="#" class="btn purple btn-outline btn-circle margin-0">Load
														More</a>
												</div>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab5-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user1.jpg" alt="">
															</td>
															<td>Eugine Turner</td>
															<td>04-01-2017</td>
															<td><span class="label label-success">Paid</span></td>
															<td>700$</td>
															<td>#7234417</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user4.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>500$</td>
															<td>#7234454</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user5.jpg" alt="">
															</td>
															<td>Jayesh Parmar</td>
															<td>03-01-2017</td>
															<td><span class="label label-danger">Unpaid</span></td>
															<td>400$</td>
															<td>#72544</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<div class="full-width text-center p-t-10">
													<a href="#" class="btn purple btn-outline btn-circle margin-0">Load
														More</a>
												</div>
											</div>
										</div>
										<div class="mdl-tabs__panel p-t-20" id="tab6-panel">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th>Image</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Ammount</th>
															<th>Transaction ID</th>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user8.jpg" alt="">
															</td>
															<td>Jane Elliott</td>
															<td>06-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>300$</td>
															<td>#7234421</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user7.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-warning">Pending</span></td>
															<td>450$</td>
															<td>#723344</td>
														</tr>
														<tr>
															<td class="patient-img sorting_1">
																<img src="assets/img/user/user9.jpg" alt="">
															</td>
															<td>Jacqueline Howell</td>
															<td>03-01-2017</td>
															<td><span class="label label-primary">Paid</span></td>
															<td>550$</td>
															<td>#7235454</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-center">
												<div class="full-width text-center p-t-10">
													<a href="#" class="btn purple btn-outline btn-circle margin-0">Load
														More</a>
												</div>
											</div>
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
			<?php include_once 'includes/settings.php'; ?>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php include_once 'includes/footer.php'; ?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/popper/popper.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- counterup -->
	<script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- chart js -->
	<script src="assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="assets/plugins/chart-js/utils.js"></script>
	<script src="assets/js/pages/chart/chartjs/home-data2.js"></script>
	<!-- sparkline -->
	<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- end js include path -->
</body>
</html>