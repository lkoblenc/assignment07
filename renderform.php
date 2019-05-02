<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $email, $fav_house, $fav_character, $leastfav_character, $fav_memory, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Survey Records</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		.cancel {
			padding-top: 30px;
		}
	</style>
</head>
<body>

<div class="container">
<h1> Add or Edit a Record </h1>

<?php
if ($error != '') {
	echo '<div style="padding:10px; border:5px black; color:red;">'.$error.'</div>';
}
?>

<form action="" method="post">
	<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> 
	<?php echo $id; ?>
</div>

	<div class="form-group">
		<label for="firstname">First Name: *</label> 
		<input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"/>
	</div>

	<div class="form-group">
		<label for="lastname">Last Name: *</label> 
		<input class="form-control" type="text" name="lastname" if="lastname" value="<?php echo $lastname; ?>"/>
	</div>

	<div class="form-group">
		<label for="email">Email: *</label> 
		<input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<label for="fav_house">Favorite House: *</label> 
		<input class="form-control" type="text" name="fav_house" id="fav_house" value="<?php echo $fav_house; ?>"/>
	</div>

	<div class="form-group">
		<label for="fav_character">Favorite Character: *</label> 
		<input class="form-control" type="text" name="fav_character" id="fav_character" value="<?php echo $fav_character; ?>"/>
	</div>	

	<div class="form-group">
		<label for="leastfav_character">Least Favorite Character: *</label> 
		<input class="form-control" type="text" name="leastfav_character" id="leastfav_character" value="<?php echo $leastfav_character; ?>"/>
	</div>

	<div class="form-group">
		<label for="fav_memory">Favorite Memory: *</label> 
		<input class="form-control" type="text" name="fav_memory" id="fav_memory" value="<?php echo $fav_memory; ?>"/>
	</div>
	
	</div>
		<div>* required</div>
		<input type="submit" name="submit" id="submit" class="btn btn-primary mb-2" value="Submit">
	</form>	

<div>
	<a href=".">Cancel</a>
</div>

</div>
</body>
</html>
<?php
}
?>
