<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include('includes/header.php'); ?>
    <?php include('config.php'); ?>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <?php if(!isset($_SESSION['user'])){?>
			<center>
			<span style="font-family: Poppins-Regular;
  font-size: large;
  color: red;">
			Welcome 🙏 to user - login system 
			<br>
			crafted by Sabarish Sanjeevi😘
			</span>
			<center>
<br>
                <span class="login100-form-title p-b-26">
                You are Not Logged In
            </span>
            <h4> Click to Login </h4>
            <a href="login.php">
            <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
                    </a>
            <?php }else{
                ?>
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<center>
					<span style="color:red; font-width:bold; font-style:italic;" class="login100-form-title">
					<?php echo $_SESSION['user']['username']; ?>
					<span>
					</center>
					<span class="login100-form-title p-b-48">
						<img src="assets/images/user.png" height="50" width="50" alt="user">
					</span>
<center>
					<div style="  font-family: Poppins-Regular;
  font-weight: 30px;
  font-size: large;
  color: violet;
  ">
					click here to <a href="logout.php"><span style="font-family: Poppins-Regular;
  font-weight: 30px;
  font-size: large;
  color: green;
  ">
  Logout -></span></a>
					</div>
					</center>
				</div>
		</div>
	</div>
</body>
</html>
<?php } ?>