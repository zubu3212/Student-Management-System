<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>
		body {
			margin: 0;
			padding: 0;
			height: 100vh;
			display: flex;
			justify-content: center;   /* horizontal center */
			align-items: center;       /* vertical center */
			background: url('school2.jpg') no-repeat center center/cover;
		}

		.form_deg {
			background: rgba(255, 255, 255, 0.9);
			padding: 30px;
			border-radius: 10px;
			width: 300px;
			box-shadow: 0 0 15px rgba(0,0,0,0.3);
		}

		.title_deg {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.label_deg {
			display: block;
			margin-top: 10px;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 8px;
			margin-top: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		.btn {
			width: 100%;
			margin-top: 15px;
		}
	</style>
</head>

<body>

	<div class="form_deg">

		<div class="title_deg">
			Login Form

			<h4>
				<?php 
				error_reporting(0);
				session_start();
				session_destroy();
				echo $_SESSION['loginMessage'];
				?>
			</h4>
		</div>
		
		<form action="login_check.php" method="POST">
			
			<div>
				<label class="label_deg">Username</label>
				<input type="text" name="username">
			</div>

			<div>
				<label class="label_deg">Password</label>
				<input type="password" name="password">
			</div>

			<div>
				<input class="btn btn-primary" type="submit" name="submit" value="Login">
			</div>

		</form>

	</div>

</body>
</html>