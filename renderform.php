<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Record</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		.cancel {
			padding-top: 30px;
		}
	</style>
</head>
<body>
	<?php session_start(); ?>
<div class="container">
<h1> Add or Edit a Record </h1>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> 
	<?php echo $id; ?>

	<div class="form-group">
		<label for="firstname">First Name: *</label> 
		<input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"/>
	</div>

	<div class="form-group">
		<label for="lastname">Last Name: *</label> 
		<input class="form-control" type="text" name="lastname" if="lastname" value="<?php echo $lastname; ?>"/>
	</div>

	<div class="form-group">
		<label for="phone">Phone: *</label> 
		<input class="form-control" type="text" name="phone" id="phone" value="<?php echo $phone; ?>"/>
	</div>

	<div class="form-group">
		<label for="email">Email: *</label> 
		<input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<div>* required</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</div>
</form>

<div class="cancel">
	<a href=".">Cancel</a>
</div>

</div>
</body>
</html>
<?php
}
?>