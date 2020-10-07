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
	<!-- gallery -->
	<link href="assets/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
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
								<div class="page-title">Gallery</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Gallery</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Gallery</header>
									<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body row">
									<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/1.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-1.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/2.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-2.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/3.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-3.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/4.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-4.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/5.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-5.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/6.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-6.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/7.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-7.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/8.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-8.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/9.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-9.jpg" alt=""> </a> </div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/10.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-10.jpg" alt=""> </a>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/11.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-11.jpg" alt=""> </a>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/12.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-12.jpg" alt=""> </a>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/13.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-13.jpg" alt=""> </a>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/14.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-14.jpg" alt=""> </a>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="assets/img/image-gallery/15.jpg" data-sub-html="Demo Description">
												<img class="img-fluid img-thumbnail" src="assets/img/image-gallery/thumb/thumb-15.jpg" alt=""> </a>
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
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- gallery -->
	<script src="assets/plugins/light-gallery/js/lightgallery-all.js"></script> <!-- Light Gallery Plugin Js -->
	<script src="assets/plugins/light-gallery/js/image-gallery.js"></script>
	<!-- end js include path -->
</body>
</html>