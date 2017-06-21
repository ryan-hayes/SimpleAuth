<!-- Authentication Module -->
<!-- Last updated by Ryan Hayes on 6/5/2017 -->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="add-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="https://use.fontawesome.com/62c02e4773.js"></script>
  <script src="add-validation.js"></script>
 
</head>
<body>
<div>
	<h3>Add a New User</h3>
	<form action="add-user.php" method="post">
		<!--Input fields-->
		Username: <input id="uid" type="text" name="username" onkeyup="checkUsernameDuplicates(); checkUsernameLength(); finalCheck();"><br>
		Password: <input id="pwdOrig" type="password" name="password-1" onkeyup="finalCheck();"><br>
		Confirm Password: <input id="pwdConf" onkeyup="checkPasswords(); finalCheck();" type="password" name="password-2"><br>
		<input id="btnSub" type="submit" disabled>
		<!--Input validation messages-->
			<span id='userTooShort'>
				<i class="fa fa-times"></i>
				<span id="txtUserTooShort">&nbsp;Username must be longer than 6 characters!</span>
			</span>
			<span id='userExists'></span>
			<span id='pwdMatch'>
				<i class="fa fa-check"></i>
				<span id="txtPwdMatch">&nbsp;Passwords match!</span>
			</span>
			<span id='pwdNoMatch'>
				<i class="fa fa-times"></i>
				<span id="txtNoPwdMatch">&nbsp;Passwords don't match!</span>
			</span>
		</div>
	</form>
</div>
</body>
</html>
