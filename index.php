<?php
	$title="DevOps Lab Terminal";
	$subtitle="Web Application";
	//Set default timezone
	date_default_timezone_set('Asia/Karachi');
	//Siteroot
	define ('siteroot','http://127.0.0.1/');
	//Database settings
	define('servername', '127.0.0.1:3307');
	define('username', 'root');
	define('password', 'root');
	define('dbname', 'devopsterminal');
	// Create connection
	global $conn;
	$conn = new mysqli(servername, username, password, dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection to Database failed");
	}
	else{
	//connection successful
	}
	session_start();
	require_once("includes/header.php");
	$loginstatus = '';
	//Check if form is submitted by POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST["email"]) && isset($_POST["password"])){
			$loginEmail =  filter_input(INPUT_POST, "email",FILTER_SANITIZE_SPECIAL_CHARS);
			$loginPass = filter_input(INPUT_POST, "password",FILTER_SANITIZE_SPECIAL_CHARS);
			$sql = "SELECT user_id, user_type, user_isactive FROM theusers where user_email = ? and user_password = ?";
			$stmt = $conn->prepare($sql);
			// Check if sql statement has been prepared successfully
			if ($stmt == FALSE){
				$loginstatus = 'S';
			}
			else{			
				$stmt->bind_param("ss", $loginEmail, $loginPass);
				$stmt->execute();
				$result = $stmt->get_result();
				if ($result->num_rows == 0){
					$loginstatus='L';
				}	
				elseif($result->num_rows == 1) {
					$row = $result->fetch_assoc();
					//Check if account is active
					if ($row['user_isactive'] != 1){
						$loginstatus='D';
					}
					else{
						$_SESSION["userId"]=$row["user_id"];
						$_SESSION["userEmail"]=$loginEmail;
						header('Location: '.'home.php');
					}
				}
			}
		}
		$conn->close();
	}
?>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-1 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="assets/img/logo.png">
									</a>
								</div>
								<div class="m-login__signin">
									<div class="m-login__head">
										<h3 class="m-login__title">Sign In</h3>
									</div>
									<form class="m-login__form m-form" action="index.php" method = "post">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" value = <?php if(isset($loginEmail)) echo $loginEmail; ?> >
										</div>
										<div class="form-group m-form__group">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
										</div>
										<div class="m-login__form-action">
											<button type= "submit" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-2	m-login__content m-grid-item--center" style="background-image: url(assets/app/media/img/bg/bg-4.jpg)">
					<div class="m-grid__item">
						<h3 class="m-login__welcome">DevOps Terminal Exam</h3>
						<p class="m-login__msg">
							Deparment of Computer Science<br>Comsats University, Islamabad
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin::Base Scripts -->
		<script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Base Scripts -->

		<!--begin::Page Snippets -->
		<script src="assets/js/login.js" type="text/javascript"></script>
		
		<?php
			// E: Error occured while sending password reset email. L: login error, S: system error during preparing statement, D: account deactivated, C: captcha failed, P: password reset link sent successfully
			if(isset($loginstatus)){
				switch ($loginstatus) {
					case 'L':
						echo "<script>$('<div class=\"m-alert m-alert--outline alert alert-danger alert-dismissible\" role=\"alert\">\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\t\t\t<span>Incorrect email or password. Please try again.</span>\t\t</div>').prependTo($(\".m-login__form\"));</script>";
						break;
					case 'S':
						echo "<script>$('<div class=\"m-alert m-alert--outline alert alert-danger alert-dismissible\" role=\"alert\">\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\t\t\t<span>System error occured. Please try later.</span>\t\t</div>').prependTo($(\".m-login__form\"));</script>";
						break;
					case 'D':
						echo "<script>$('<div class=\"m-alert m-alert--outline alert alert-danger alert-dismissible\" role=\"alert\">\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\t\t\t<span>Your account has been deactiviated. Please contact your the administrator.</span>\t\t</div>').prependTo($(\".m-login__form\"));</script>";
						break;
					case 'U':
						echo "<script>$('<div class=\"m-alert m-alert--outline alert alert-danger alert-dismissible\" role=\"alert\">\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\t\t\t<span>No registerd user, associated with this email address, found.</span>\t\t</div>').prependTo($(\".m-login__form\"));</script>";
						break;
				}
				$loginstatus = "";
				$loginEmail = "";
			}
		?>

		<!--end::Page Snippets -->
	</body>

	<!-- end::Body -->
</html>
