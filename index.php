<!DOCTYPE html>
<html>
<head>
	<!-- boostrap cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	 rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
	 crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	 integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	 <!-- user defined css -->
	 <link rel="stylesheet" href="abc.css">

	 <!-- game music -->
	<!--  <iframe src="bgm.mp3" allow="autoplay" id="audio player" style="display: none;" ></iframe> -->
	 <audio id="player" autoplay loop>
	        <source src="bgm.mp3"  type="audio/mp3">
	    	<source src="bgm.ogg" type="audio/ogg">
	</audio>
</head>

<body background="Image/bd.gif" style="background-repeat: no-repeat;
    background-size: 1600px 1000px;">

	<div class="text-center" style="padding:50px 0">
	<div class="logo">BBFSH.IO</div>
	<!-- Main Form -->
	<form action="" method="post" id="login-form">
		<div class="login-form-1">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username"
						 required >
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password"
						required>
					</div>
					<div class="form-group login-group-checkbox">
						<button type="submit" onclick="loginSubmit()" class="btn btn-primary">Log In
							<i class="fas fa-chevron-right"></i>
						</button>

						<button type="submit" onclick="registerSubmit()" class="btn btn-secondary">Register
							<i class="fas fa-chevron-right"></i>
						</button>
					</div>
					
				</div>
				
				<input type="hidden" name="submitted" value="true">
			</div>
		</div>
	</form>
	
<p><img src="Image/main1.gif" style="width:500px;height:500px;margin-left:-1200px; margin-top: -250px;"></img></p>
<p><img src="Image/main2.gif" style="width:400px;height:400px;margin-left:-850px; margin-top: -500px;"></img></p>
<p><img src="Image/main2.gif" style="width:300px;height:300px;margin-left:-600px; margin-top: -500px;"></img></p>
<p><img src="Image/main2.gif" style="width:200px;height:200px;margin-left:-400px; margin-top: -500px;"></img></p>
<p><img src="Image/main2.gif" style="width:150px;height:150px;margin-left:-250px; margin-top: -550px;"></img></p>
<p><img src="Image/main2.gif" style="width:100px;height:100px;margin-left:-150px; margin-top: -600px;"></img></p>
	
	<script type="text/javascript">
		function loginSubmit(){
			document.getElementById("login-form").action = "play.php";
		}

		function registerSubmit(){
			document.getElementById("login-form").action = "play.php";
		}
	</script>

</body>
</html>