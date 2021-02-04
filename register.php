<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
                <link rel="stylesheet" href="assets/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="assets/images/image-1.png" alt="" class="image-1">
                                <form method="post" action="signup.php">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
                                                <input type="text" class="form-control" placeholder="Username" name="uname">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
                                                <input type="number" class="form-control" placeholder="Phone Number" name="pn" >
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
                                                <input type="email" class="form-control" placeholder="Mail" name="mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                                                <input type="password" class="form-control" placeholder="Password" name="pwd" >
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                                                <input type="password" class="form-control" placeholder="Confirm Password" name="cpwd" >
					</div>
                                        <?php
                                        error_reporting(0);
                                            if($_GET['msg']){
                                        ?>
                                        <div style="font-size: 16px;color: red;"><?=$_GET['msg']?></div>
                                        <?php
                                            }
                                        
                                            elseif($_GET['msg1']){
                                        ?>
                                        <div style="font-size: 16px;color: green;"><?=$_GET['msg1']?></div>
                                        <?php
                                            }?>
                                        <button name="submit" type="submit" style="margin-top: 10px;" formaction="signup.php">
						<span>Submit</span>
					</button>
                                        <button style="margin-top: 10px;" formaction="login.php">
						<span>Login</span>
					</button>
                                       
				</form>
				<img src="assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>