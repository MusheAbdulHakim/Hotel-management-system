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
	<!-- data tables -->
	<link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
								<div class="page-title">All Bookings</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Bookings</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>All Bookings</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="add_room.php" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
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
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width" id="example4">
											<thead>
												<tr>
													<th class="center"> img </th>
													<th class="center"> # </th>
													<th class="center"> Type </th>
													<th class="center"> AC/Non AC </th>
													<th class="center"> Meal </th>
													<th class="center"> Bad Capacity </th>
													<th class="center"> Phone </th>
													<th class="center"> Rent </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">101</td>
													<td class="center">Single</td>
													<td class="center">AC</td>
													<td class="center">Free Dinner</td>
													<td class="center">2</td>
													<td class="center">123456789</td>
													<td class="center">25$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">102</td>
													<td class="center">Double</td>
													<td class="center">Non AC</td>
													<td class="center">Free Lunch</td>
													<td class="center">3</td>
													<td class="center">123456789</td>
													<td class="center">35$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">103</td>
													<td class="center">King</td>
													<td class="center">AC</td>
													<td class="center">None</td>
													<td class="center">5</td>
													<td class="center">123456789</td>
													<td class="center">65$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">101</td>
													<td class="center">Single</td>
													<td class="center">AC</td>
													<td class="center">Free Dinner</td>
													<td class="center">2</td>
													<td class="center">123456789</td>
													<td class="center">25$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">102</td>
													<td class="center">Double</td>
													<td class="center">Non AC</td>
													<td class="center">Free Lunch</td>
													<td class="center">3</td>
													<td class="center">123456789</td>
													<td class="center">35$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">103</td>
													<td class="center">King</td>
													<td class="center">AC</td>
													<td class="center">None</td>
													<td class="center">5</td>
													<td class="center">123456789</td>
													<td class="center">65$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">101</td>
													<td class="center">Single</td>
													<td class="center">AC</td>
													<td class="center">Free Dinner</td>
													<td class="center">2</td>
													<td class="center">123456789</td>
													<td class="center">25$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">102</td>
													<td class="center">Double</td>
													<td class="center">Non AC</td>
													<td class="center">Free Lunch</td>
													<td class="center">3</td>
													<td class="center">123456789</td>
													<td class="center">35$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">103</td>
													<td class="center">King</td>
													<td class="center">AC</td>
													<td class="center">None</td>
													<td class="center">5</td>
													<td class="center">123456789</td>
													<td class="center">65$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">101</td>
													<td class="center">Single</td>
													<td class="center">AC</td>
													<td class="center">Free Dinner</td>
													<td class="center">2</td>
													<td class="center">123456789</td>
													<td class="center">25$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">102</td>
													<td class="center">Double</td>
													<td class="center">Non AC</td>
													<td class="center">Free Lunch</td>
													<td class="center">3</td>
													<td class="center">123456789</td>
													<td class="center">35$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">103</td>
													<td class="center">King</td>
													<td class="center">AC</td>
													<td class="center">None</td>
													<td class="center">5</td>
													<td class="center">123456789</td>
													<td class="center">65$</td>
													<td class="center">
														<a href="edit_room.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
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
	<!-- data tables -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="assets/js/pages/table/table_data.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
</body>
</html>