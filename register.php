<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<title>Registration - User Login Portal</title>


<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="register.php" method="POST">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					<span class="login100-form-title p-b-48">
						<img src="assets/images/user.png" height="50" width="50" alt="user">
					</span>
					<center>

          <?php include(ROOT_PATH . '/includes/errors.php') ?>

                    <div class="wrap-input100 validate-input" data-validate = "Valid nameis: xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid phone is: 123456789">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100" data-placeholder="Phone No"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="password" name="password_1">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="password" name="password_2">
						<span class="focus-input100" data-placeholder="Confirm password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="reg_user">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="login.php">
							Sign In
						</a>
					</div>
				</form>
				<br>
				<center>
				<a class="txt2" href="https://sabarish.techcodes.in"> Crafted with 💕 by Sabarish Sanjeevi</a>
				</center>
				</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<?php include('includes/header.php'); ?>
	<?php include('includes/header.php'); ?>

