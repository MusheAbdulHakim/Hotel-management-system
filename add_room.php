﻿<?php 
	require_once 'libraries/meekrodb/db.class.php';
	require_once 'includes/functions.php';
	$app = new HotelLib();
	global $success_msg;
	session_start();
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}elseif (isset($_POST['add_room'])) {
		$room_number = htmlspecialchars($_POST['room_number']);
		$room_type = htmlspecialchars($_POST['room_type']);
		$AC = htmlspecialchars($_POST['ac_condition']);
		$meal = htmlspecialchars($_POST['meal']);
		$phone = htmlspecialchars($_POST['phone']);
		$rent = htmlspecialchars($_POST['rent']);
		//graabbing the ppicture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="uploads/rooms/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);
		if (move_uploaded_file($file_loc,$folder.$final_file)) {
			$image=$final_file;
		}
		$details = htmlspecialchars($_POST['details']);
		$insert = DB::insert('rooms', [
					  'Room_Number' => $room_number,
					  'Room_Type' => $room_type,
					  'AC'=>$AC,
					  'Meal'=>$meal,
					  'Telephone'=>$phone,
					  'Rent'=>$rent,
					  'Picture'=>$image,
					  'Details'=>$details,
					]);
		if ($insert) {
			$success_msg = '<div class="alert label-success alert-dismissible" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											New Room Has Been Added Successfully!
										</div>';
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="description" content="Responsive Admin Template">
	<meta name="author" content="SmartUniversity">
	<title>Spice Hotel || Add Room</title>
	<!-- icons -->
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- sweet alerts -->
	<link rel="stylesheet" href="assets/plugins/sweet-alert/sweetalert.min.css">
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
					<?php echo $success_msg; ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Room Details</header>
								</div>
								<form method="POST" enctype="multipart/form-data">
									<div class="card-body row">
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="room_number" class="mdl-textfield__input" type="text" value="<?php echo 'RM-'.$app->randomString(4); ?>" id="txtRoomNo">
												<label class="mdl-textfield__label">Room Number</label>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input name="room_type" class="mdl-textfield__input" type="text" id="list3" value="" readonly="" tabindex="-1">
												<label for="list3" class="pull-right margin-0">
													<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												</label>
												<label for="list3" class="mdl-textfield__label">Room Type</label>
												<ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
													<li class="mdl-menu__item" data-val="single">Single</li>
													<li class="mdl-menu__item" data-val="double">Double</li>
													<li class="mdl-menu__item" data-val="quad">Quad</li>
													<li class="mdl-menu__item" data-val="king">King</li>
													<li class="mdl-menu__item" data-val="suite">Suite</li>
													<li class="mdl-menu__item" data-val="apartment">Apartments</li>
													<li class="mdl-menu__item" data-val="villa">Villa</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input name="ac_condition" class="mdl-textfield__input" type="text" id="sample2" value="" readonly="" tabindex="-1">
												<label for="sample2" class="pull-right margin-0">
													<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												</label>
												<label for="sample2" class="mdl-textfield__label">AC/Non AC</label>
												<ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
													<li value="True" class="mdl-menu__item" data-val="Yes">AC</li>
													<li value="False" class="mdl-menu__item" data-val="No">None AC</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input name="meal" class="mdl-textfield__input" type="text" id="sample3" value="" readonly="" tabindex="-1">
												<label for="sample3" class="pull-right margin-0">
													<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
												</label>
												<label for="sample2" class="mdl-textfield__label">Meal</label>
												<ul data-mdl-for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
													<li class="mdl-menu__item" data-val="breakfast">Free Breakfast</li>
													<li class="mdl-menu__item" data-val="dinner">Free Dinner</li>
													<li class="mdl-menu__item" data-val="breakfast & dinner">Free Breakfast &amp; Dinner</li>
													<li class="mdl-menu__item" data-val="Free welcome drink">Free Welcome Drink</li>
													<li class="mdl-menu__item" data-val="None">No Free Food</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="phone" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text8">
												<label class="mdl-textfield__label" for="text8">Telephone Number</label>
												<span class="mdl-textfield__error">Number required!</span>
											</div>
										</div>
										<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="rent" class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text7">
												<label class="mdl-textfield__label" for="text7">Rent Per Night</label>
												<span class="mdl-textfield__error">Number required!</span>
											</div>
										</div>
										<div class="col-lg-12 p-t-20">
											<label class="control-label col-md-3" for="picture">Upload Room Photo</label>
												<input name="image" class="mdl-textfield__input" type="file" id="picture">
										</div>
										<div class="col-lg-12 p-t-20">
											<div class="mdl-textfield mdl-js-textfield txt-full-width">
												<textarea name="details" class="mdl-textfield__input" rows="4" id="education"></textarea>
												<label class="mdl-textfield__label" for="text7">Room Details</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-20 text-center">
											<button name="add_room" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
											<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
										</div>
									</div>
								</form>
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
	<!-- Sweet Alert -->
	<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
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