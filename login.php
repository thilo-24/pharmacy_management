<DOCTYPE html>

	<html lang="en">
	<head>
		<title> Login and Signup form </title>
		<link rel="icon" type="image/x-icon" href="logoletter.png">
		
		<link rel="stylesheet" href="css/style.css">
		
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		
	</head>
	<body>
		<section class="container forms">
			<div class="form login" id="login">
				<div class="form-content" id="login">
					<header>Login</header>
					
					<form method="post" action="register.php">
						<div class="field input-field">
							<input type="email" name="email" id="email" placeholder="Email" class="input">
							
						</div>
						
						<div class="field input-field">
							<input type="password" name="password" id="password" placeholder="Password" class="password">
							<i class='bx bx-hide eye-icon'></i>
						</div>
						
						<div class="form-link">
							<a href="forgot.html" class="forgot-pass">Forgot password?</a>
						</div>
						
						<div class="field button-field">
							<button><input a href="home.html" type="submit" value="Login" name="login"></button>
						</div>
						
					</form>	
						
					<div class="form-link">
							<span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
						</div>
				</div>
				<div class="line"></div>
				
				<div class="media-options">
					<a href="#" class="field facebook">
						<i class='bx bxl-facebook facebook-icon' ></i>
						<span>Login with facebook</span>
					</a>
				</div>
				<div class="media-options">
					<a href="#" class="field google">
						<img src="image/R.png" alt="" class="google-img">
						<span>Login with google</span>
					</a>
				</div>
			</div>
			
			<div class="form Signup">
				<div class="form-content" id="Signup">
					<header><a href="home.html"></a>Signup</header>
					
					<form method="post" action="register.php">
						<div class="field input-field">
							<input type="text" name="Uname" id="Uname" placeholder="Username" class="input">
						</div>
						
						<div class="field input-field">
							<input type="text" name="address" id="address" placeholder="Address" class="input">
						</div>
						
						<div class="field input-field">
							<input type="number" name="Age" id="Age" placeholder="Age" class="input" >
						</div>
						
						<div class="field input-field">
							<input type="email" name="email" id="email" placeholder="Email" class="input">
						</div>
						
						<div class="field input-field">
							<input type="password" name="password" id="password" placeholder="Password" class="password">
							<i class='bx bx-hide eye-icon'></i>
						</div>
						
						<div class="field button-field">
							<button><input type="submit" value="Sign Up" name="Signup"></button>
						</div>
						
					</form>	
						
					<div class="form-link">
							<span>Already have an account? <a href="#" class="link login-link">Login</a></span>
						</div>
				</div>
				<div class="line"></div>
				
				<div class="media-options">
					<a href="#" class="field facebook">
						<i class='bx bxl-facebook facebook-icon' ></i>
						<span>Login with facebook</span>
					</a>
				</div>
				<div class="media-options">
					<a href="#" class="field google">
						<img src="image/R.png" alt="" class="google-img">
						<span>Login with google</span>
					</a>
				</div>
			</div>
		</section>
		
		<script src="js/script.js"></script>
		
	</body>
	</html>
	