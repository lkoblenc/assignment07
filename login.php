<?php include 'inc/header.php';?>

	<div class="container2">
	<div class="form">
		<h1>Admin Login</h1>
		<div class="credentials">Please fill in your credentials to login</div>
		<br>
		<form method="post" action="#">

			<label>Username</label><br>
                <input type="text" name="username"><br>

            <label>Password</label><br>
                <input type="password" name="password"><br><br>

            <input type="submit" value="Login">

            <div class="account">Haven't created an account yet? <a href="register.php">Register here</a>.</div>
			
		</form>
	</div>
	<div class="pic">
		<img src="images/loginpic.jpg" alt="Login Picture">
	</div>	
	</div>

<?php include 'inc/footer.php';?>

</body>
</html>