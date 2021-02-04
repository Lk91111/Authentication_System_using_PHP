<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log In</title>
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
                                <form action="signin.php" method="post">
					<h3>Sign In</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
                                                <input type="text" class="form-control" placeholder="Username" name="uname">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                                                <input type="password" class="form-control" placeholder="Password" name="pwd">
					</div>
                                        <?php
                                            if($_GET){
                                        ?>
                                        <div style="font-size: 16px;color: red;"><?=$_GET['msg']?></div>
                                        <?php
                                            }?>
                                        <button name="signin" formaction="signin.php" style="margin-top: 10px;" type="submit">
						<span>Login</span>
					</button>
                                        <button style="margin-top: 10px;" name="signup" formaction="register.php">
						<span>Sign Up</span>
					</button>
				</form>
				<img src="assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            $('body').find('img[src$="IMAGE URL"]').parent().closest('a').closest('div').remove();
        });
</script>

	</body>
</html>

