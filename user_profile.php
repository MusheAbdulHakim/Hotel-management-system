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
								<div class="page-title">User Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">User</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">User Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-12">
										<div class="row">
											<div class="profile-userpic">
												<img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> John Deo </div>
											<div class="profile-usertitle-job"> Jr. Professor </div>
										</div>
										
										<!-- END SIDEBAR USER TITLE -->
										</div>
								</div>
								

								<div class="card ">
									<div class="card-head card-topline-aqua">
										<header>Address</header>
									</div>
									<div class="card-body no-padding height-10">
										<div class="row text-center m-t-10">
											<div class="col-md-12">
												<p>456, Pragri flat, varacha road, Surat
													<br> Gujarat, India.</p>
											</div>
										</div>
									</div>
								</div>
																
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="profile-tab-box">
										<div class="p-l-20">
											<ul class="nav ">
												<li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">About Me</a></li>
												
												<li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab3" data-toggle="tab">Settings</a></li>
											</ul>
										</div>
									</div>
									<div class="white-box">
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane active fontawesome-demo" id="tab1">
												<div id="biography">
													<div class="row">
														<div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
															<br>
															<p class="text-muted">John Deo</p>
														</div>
														<div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
															<br>
															<p class="text-muted">(123) 456 7890</p>
														</div>
														<div class="col-md-3 col-6 b-r"> <strong>Email</strong>
															<br>
															<p class="text-muted">johndeo@example.com</p>
														</div>													</div>
													<hr>
													
												</div>
												<ul class="list-group list-group-unbordered">
													<li class="list-group-item">
														<b>Gender </b>
														<div class="profile-desc-item pull-right">Female</div>
													</li>
												</ul>
											</div>
											
											<div class="tab-pane" id="tab3">
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<div class="card-head">
															<header>Password Change</header>
														</div>
														<div class="card-body " id="bar-parent1">
															<form method="POST">
																<div class="form-group">
																	<label for="simpleFormEmail">User Name</label>
																	<input name="username" type="text" class="form-control" id="simpleFormEmail" placeholder="Enter user name">
																</div>
																<div class="form-group">
																	<label for="simpleFormPassword">Current
																		Password</label>
																	<input name="password" type="password" class="form-control" id="simpleFormPassword" placeholder="Current Password">
																</div>
																<div class="form-group">
																	<label for="simpleFormPassword">New Password</label>
																	<input name="new_password" type="password" class="form-control" id="newpassword" placeholder="New Password">
																</div>
																<button type="submit" name="update_change" class="btn btn-primary">Submit</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- address card -->
									

								</div>
							</div>
							<!-- END PROFILE CONTENT -->
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