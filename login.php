<?php
	
 session_start();
//Database Configuration File
include_once('includes/config.php');
error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username and password
    $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
    $sql ="SELECT UserName,Password FROM tbladmin WHERE (UserName=:usname)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':usname', $uname, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
				if($query->rowCount() > 0)
				{
				foreach ($results as $row) {
				$hashpass=$row->Password;
				}
				if(!empty($_POST["remember"])) {
			//COOKIES for username
			setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
			//COOKIES for password
			setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
					if(isset($_COOKIE["user_login"])) {
						setcookie ("user_login","");
					if(isset($_COOKIE["userpassword"])) {
						setcookie ("userpassword","");
					}
				}
			}
			//verifying Password
			if (password_verify($password, $hashpass)) {
					$_SESSION['userlogin']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  } else {
  	$wrongpassword='  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh Snapp!😕</strong> Alert <b class="alert-link">Password: </b>You entered wrong password.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'; 
  			}
	}
//if username or email not found in database
else{
	$wrongusername='
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh Snapp!🙃</strong> Alert <b class="alert-link">UserName: </b> You entered a wrong UserName.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  }
 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Spice Hotel | Login</title>
	<!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-home"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<span><?php echo $wrongusername; ?></span>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<span><?php echo $wrongpassword; ?></span>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button name="login" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>
</html>