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
	<!-- data tables -->
	<link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
								<div class="page-title">Support</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Support</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Support</header>
								</div>
								<div class="card-body ">
									<div class="state-overview">
										<div class="row">
											<div class="col-lg-3 col-sm-6">
												<div class="overview-panel purple">
													<div class="symbol">
														<i class="fa fa-ticket usr-clr"></i>
													</div>
													<div class="value white">
														<p class="sbold addr-font-h1" data-counter="counterup" data-value="1576">0</p>
														<p>Total Tickets</p>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6">
												<div class="overview-panel deepPink-bgcolor">
													<div class="symbol">
														<i class="fa fa-reply"></i>
													</div>
													<div class="value white">
														<p class="sbold addr-font-h1" data-counter="counterup" data-value="956">0</p>
														<p>Respond</p>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6">
												<div class="overview-panel orange">
													<div class="symbol">
														<i class="fa fa-handshake-o"></i>
													</div>
													<div class="value white">
														<p class="sbold addr-font-h1" data-counter="counterup" data-value="856">0</p>
														<p>Resolved</p>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6">
												<div class="overview-panel blue-bgcolor">
													<div class="symbol">
														<i class="fa fa-clock-o"></i>
													</div>
													<div class="value white">
														<p class="sbold addr-font-h1" data-counter="counterup" data-value="134">0</p>
														<p>Pending</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<button id="addRow1" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<table class="table table-hover table-checkable order-column full-width" id="example4">
										<thead>
											<tr>
												<th class="center">No</th>
												<th class="center">Opened By</th>
												<th class="center">Email</th>
												<th class="center">Subject</th>
												<th class="center">Status</th>
												<th class="center">Assign To</th>
												<th class="center">Date</th>
												<th class="center">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">1</td>
												<td class="center">Jens Brincker</td>
												<td class="center">test@example.com</td>
												<td class="center">Image not Proper</td>
												<td class="center">
													<span class="label label-sm label-success">complete</span>
												</td>
												<td class="center">Kenny Josh</td>
												<td class="center">27/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td class="center">Mark Hay</td>
												<td class="center">test@example.com</td>
												<td class="center">Compile time error</td>
												<td class="center">
													<span class="label label-sm label-warning">new </span>
												</td>
												<td class="center"> Mark</td>
												<td class="center">26/05/2017</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">About web template</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Cinnabar</td>
												<td class="center">21/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td class="center">David Perry</td>
												<td class="center">test@example.com</td>
												<td class="center">How to change color</td>
												<td class="center">
													<span class="label label-sm label-danger">pending</span>
												</td>
												<td class="center">Felix </td>
												<td class="center">20/04/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">5</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">Image size reduce</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Beryl</td>
												<td class="center">24/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">6</td>
												<td class="center">Alan Gilchrist</td>
												<td class="center">test@example.com</td>
												<td class="center">How to buy template</td>
												<td class="center">
													<span class="label label-sm label-warning ">new</span>
												</td>
												<td class="center">Joshep</td>
												<td class="center">22/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">7</td>
												<td class="center">Mark Hay</td>
												<td class="center">test@example.com</td>
												<td class="center">Error generated</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Jayesh</td>
												<td class="center">18/06/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">8</td>
												<td class="center">Sue Woodger</td>
												<td class="center">test@example.com</td>
												<td class="center">Not satisfy</td>
												<td class="center">
													<span class="label label-sm label-danger">pending</span>
												</td>
												<td class="center">Sharma</td>
												<td class="center">17/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">9</td>
												<td class="center">Jens Brincker</td>
												<td class="center">test@example.com</td>
												<td class="center">Image not Proper</td>
												<td class="center">
													<span class="label label-sm label-success">complete</span>
												</td>
												<td class="center">Kenny Josh</td>
												<td class="center">27/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">10</td>
												<td class="center">Mark Hay</td>
												<td class="center">test@example.com</td>
												<td class="center">Compile time error</td>
												<td class="center">
													<span class="label label-sm label-warning">new </span>
												</td>
												<td class="center"> Mark</td>
												<td class="center">26/05/2017</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">11</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">About web template</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Cinnabar</td>
												<td class="center">21/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">12</td>
												<td class="center">David Perry</td>
												<td class="center">test@example.com</td>
												<td class="center">How to change color</td>
												<td class="center">
													<span class="label label-sm label-danger">pending</span>
												</td>
												<td class="center">Felix </td>
												<td class="center">20/04/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">13</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">Image size reduce</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Beryl</td>
												<td class="center">24/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">14</td>
												<td class="center">Alan Gilchrist</td>
												<td class="center">test@example.com</td>
												<td class="center">How to buy template</td>
												<td class="center">
													<span class="label label-sm label-warning ">new</span>
												</td>
												<td class="center">Joshep</td>
												<td class="center">22/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">15</td>
												<td class="center">Mark Hay</td>
												<td class="center">test@example.com</td>
												<td class="center">Error generated</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Jayesh</td>
												<td class="center">18/06/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">16</td>
												<td class="center">Sue Woodger</td>
												<td class="center">test@example.com</td>
												<td class="center">Not satisfy</td>
												<td class="center">
													<span class="label label-sm label-danger">pending</span>
												</td>
												<td class="center">Sharma</td>
												<td class="center">17/05/2016</td>
												<td class="center">
													<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
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
	<script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- data tables -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="assets/js/pages/table/table_data.js"></script>
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