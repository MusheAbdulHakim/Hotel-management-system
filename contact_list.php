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
								<div class="page-title">Contact List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Contact List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-3 col-lg-3">
							<div class="card card-box">
								<div class="card-body ">
									<div class="row">
										<div class="profile-userpic">
											<img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="profile-usertitle-name"> John Deo </div>
										<div class="profile-usertitle-job"> Manager </div>
									</div>
									<ul class="list-group list-group-unbordered">
										<li class="list-group-item">
											<b>All Contacts</b> <a class="pull-right">1,200</a>
										</li>
										<li class="list-group-item">
											Friends<a class="pull-right">450</a>
										</li>
										<li class="list-group-item">
											Family<a class="pull-right">345</a>
										</li>
										<li class="list-group-item">
											Office<a class="pull-right">172</a>
										</li>
										<li class="list-group-item">
											Social<a class="pull-right">432</a>
										</li>
									</ul>
									<!-- END SIDEBAR USER TITLE -->
									<!-- SIDEBAR BUTTONS -->
									<div class="profile-userbuttons">
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">New
											Label</button>
									</div>
									<!-- END SIDEBAR BUTTONS -->
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-9 col-lg-9">
							<div class="card card-box">
								<div class="card-head">
									<header>Contacts List</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width" id="example4">
											<thead>
												<tr>
													<th class="center"></th>
													<th class="center"> Name </th>
													<th class="center"> Mobile </th>
													<th class="center"> Email </th>
													<th class="center"> Address </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">Ashton Cox</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">345 Lancaster Lane, NJ</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">Cedric Kelly</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">7 Franklin Rd. Macon, GA </td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">Colleen Hurst</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">90 Meadow Ave. Port Orange, FL</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user4.jpg" alt="">
													</td>
													<td class="center">Airi Satou</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">9264 E. Vermont Lane Maplewood, NJ </td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user5.jpg" alt="">
													</td>
													<td class="center">Ashton Cox</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">341 Valley St. Phoenix, AZ</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user6.jpg" alt="">
													</td>
													<td class="center">Brielle Williamson</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">345 Lancaster Lane Roy, UT </td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user7.jpg" alt="">
													</td>
													<td class="center">Caesar Vance</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">2 Wall Ave. Bloomfield, NJ</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td class="center">Ashton Cox</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">345 Lancaster Lane, NJ</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td class="center">Cedric Kelly</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">7 Franklin Rd. Macon, GA </td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user3.jpg" alt="">
													</td>
													<td class="center">Colleen Hurst</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">90 Meadow Ave. Port Orange, FL</td>
													<td class="center">
														<a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td class="user-circle-img">
														<img src="assets/img/user/user4.jpg" alt="">
													</td>
													<td class="center">Airi Satou</td>
													<td class="center">4444565756 </td>
													<td class="center">test@gmail.com </td>
													<td class="center">9264 E. Vermont Lane Maplewood, NJ </td>
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
				<div class="chat-sidebar-container" data-close-on-body-click="false">
					<div class="chat-sidebar">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
								</a>
							</li>
							<li class="nav-item">
								<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
								</a>
							</li>
							<li class="nav-item">
								<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
								<div class="slimscroll-style">
									<div class="theme-light-dark">
										<h6>Sidebar Theme</h6>
										<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
											Sidebar</button>
										<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
											Sidebar</button>
									</div>
									<div class="theme-light-dark">
										<h6>Sidebar Color</h6>
										<ul class="list-unstyled">
											<li class="complete">
												<div class="theme-color sidebar-theme">
													<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
												</div>
											</li>
										</ul>
										<h6>Header Brand color</h6>
										<ul class="list-unstyled">
											<li class="theme-option">
												<div class="theme-color logo-theme">
													<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
												</div>
											</li>
										</ul>
										<h6>Header color</h6>
										<ul class="list-unstyled">
											<li class="theme-option">
												<div class="theme-color header-theme">
													<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
													<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Start Doctor Chat -->
							<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
								<div class="chat-sidebar-list">
									<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
										<div class="chat-header">
											<h5 class="list-heading">Online</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media"><img class="media-object" src="assets/img/user/user3.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">John Deo</h5>
													<div class="media-heading-sub">Spine Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">5</span>
												</div> <img class="media-object" src="assets/img/user/user1.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Rajesh</h5>
													<div class="media-heading-sub">Director</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="assets/img/user/user5.jpg" width="35" height="35" alt="...">
												<i class="away dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jacob Ryan</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-danger">8</span>
												</div> <img class="media-object" src="assets/img/user/user4.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Kehn Anderson</h5>
													<div class="media-heading-sub">CEO</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="assets/img/user/user2.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Sarah Smith</h5>
													<div class="media-heading-sub">Anaesthetics</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="assets/img/user/user7.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Vlad Cardella</h5>
													<div class="media-heading-sub">Cardiologist</div>
												</div>
											</li>
										</ul>
										<div class="chat-header">
											<h5 class="list-heading">Offline</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media">
												<div class="media-status">
													<span class="badge badge-warning">4</span>
												</div> <img class="media-object" src="assets/img/user/user6.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jennifer Maklen</h5>
													<div class="media-heading-sub">Nurse</div>
													<div class="media-heading-small">Last seen 01:20 AM</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="assets/img/user/user8.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Lina Smith</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
													<div class="media-heading-small">Last seen 11:14 PM</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">9</span>
												</div> <img class="media-object" src="assets/img/user/user9.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jeff Adam</h5>
													<div class="media-heading-sub">Compounder</div>
													<div class="media-heading-small">Last seen 3:31 PM</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="assets/img/user/user10.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Anjelina Cardella</h5>
													<div class="media-heading-sub">Physiotherapist</div>
													<div class="media-heading-small">Last seen 7:45 PM</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Doctor Chat -->
							<!-- Start Setting Panel -->
							<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
								<div class="chat-sidebar-settings-list slimscroll-style">
									<div class="chat-header">
										<h5 class="list-heading">Layout Settings</h5>
									</div>
									<div class="chatpane inner-content ">
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Sidebar Position</div>
												<div class="setting-set">
													<select class="sidebar-pos-option form-control input-inline input-sm input-small ">
														<option value="left" selected="selected">Left</option>
														<option value="right">Right</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Header</div>
												<div class="setting-set">
													<select class="page-header-option form-control input-inline input-sm input-small ">
														<option value="fixed" selected="selected">Fixed</option>
														<option value="default">Default</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Sidebar Menu </div>
												<div class="setting-set">
													<select class="sidebar-menu-option form-control input-inline input-sm input-small ">
														<option value="accordion" selected="selected">Accordion</option>
														<option value="hover">Hover</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Footer</div>
												<div class="setting-set">
													<select class="page-footer-option form-control input-inline input-sm input-small ">
														<option value="fixed">Fixed</option>
														<option value="default" selected="selected">Default</option>
													</select>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">Account Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Notifications</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
															<input type="checkbox" id="switch-1" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Show Online</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
															<input type="checkbox" id="switch-7" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Status</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
															<input type="checkbox" id="switch-2" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">2 Steps Verification</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
															<input type="checkbox" id="switch-3" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">General Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Location</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
															<input type="checkbox" id="switch-4" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Save Histry</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
															<input type="checkbox" id="switch-5" class="mdl-switch__input" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Auto Updates</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
															<input type="checkbox" id="switch-6" class="mdl-switch__input" checked="">
														</label>
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
				<!-- end chat sidebar -->
			</div>
			<!-- end page container -->
			<!-- start footer -->
			<?php include_once 'includes/footer.php'; ?>
			<!-- end footer -->
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/popper/popper.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
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