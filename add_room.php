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
	<!-- dropzone -->
	<link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
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
								<div class="page-title">Add Room Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Room Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Room Details</header>
								</div>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<form method="POST" enctype="multipart/form-data">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtRoomNo">
											<label class="mdl-textfield__label">Room Number</label>
										</div>
										</form>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="list3" value="" readonly="" tabindex="-1">
											<label for="list3" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="list3" class="mdl-textfield__label">Room Type</label>
											<ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="1">Single</li>
												<li class="mdl-menu__item" data-val="2">Double</li>
												<li class="mdl-menu__item" data-val="3">Quad</li>
												<li class="mdl-menu__item" data-val="4">King</li>
												<li class="mdl-menu__item" data-val="5">Suite</li>
												<li class="mdl-menu__item" data-val="6">Apartments</li>
												<li class="mdl-menu__item" data-val="7">Villa</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value="" readonly="" tabindex="-1">
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">AC/Non AC</label>
											<ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">AC</li>
												<li class="mdl-menu__item" data-val="BY">Non AC</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample3" value="" readonly="" tabindex="-1">
											<label for="sample3" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Meal</label>
											<ul data-mdl-for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="1">Free Breakfast</li>
												<li class="mdl-menu__item" data-val="2">Free Dinner</li>
												<li class="mdl-menu__item" data-val="3">Free Breakfast &amp; Dinner</li>
												<li class="mdl-menu__item" data-val="4">Free Welcome Drink</li>
												<li class="mdl-menu__item" data-val="5">No Free Food</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample4" value="" readonly="" tabindex="-1">
											<label class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label class="mdl-textfield__label">Cancellation Charges</label>
											<ul data-mdl-for="sample4" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="1">Free Cancellation</li>
												<li class="mdl-menu__item" data-val="2">10% Before 24 Hours</li>
												<li class="mdl-menu__item" data-val="1">No Cancellation Allow</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="list2" value="" readonly="" tabindex="-1">
											<label for="list2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="list2" class="mdl-textfield__label">Bad Capacity</label>
											<ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="1">1</li>
												<li class="mdl-menu__item" data-val="2">2</li>
												<li class="mdl-menu__item" data-val="3">3</li>
												<li class="mdl-menu__item" data-val="4">4</li>
												<li class="mdl-menu__item" data-val="5">5</li>
												<li class="mdl-menu__item" data-val="6">6</li>
												<li class="mdl-menu__item" data-val="7">7</li>
												<li class="mdl-menu__item" data-val="8">8</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text8">
											<label class="mdl-textfield__label" for="text8">Telephone Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text7">
											<label class="mdl-textfield__label" for="text7">Rent Per Night</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<label class="control-label col-md-3" for="picture">Upload Room Photos</label>
											<input class="mdl-textfield__input" type="file" id="picture">
									</div>
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="education"></textarea>
											<label class="mdl-textfield__label" for="text7">Room Details</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button name="add_room" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
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
	<script src="assets/js/pages/material_select/getmdl-select.js"></script>
	<!-- dropzone -->
	<script src="assets/plugins/dropzone/dropzone.js"></script>
	<script src="assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
</body>
</html>