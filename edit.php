<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
include('renderform.php');

// connect to the database
include('connect-db.php');

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
		$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
		$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
		$fav_house = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_house']));
		$fav_character = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_character']));
		$leastfav_character = mysqli_real_escape_string($connection, htmlspecialchars($_POST['leastfav_character']));
		$fav_moment = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_moment']));

		// check that firstname/lastname fields are both filled in
		if ($firstname == '' || $lastname == '' || $phone == '' || $email == '' || $fav_house == '' || $fav_character || $leastfav_character || $fav_moment == '') {
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
			renderForm($id, $firstname, $lastname, $email, $fav_house, $fav_character, $leastfav_character, $fav_moment, $error);

		} else {
			// save the data to the database
			$result = mysqli_query($connection, "UPDATE survey SET firstname='$firstname', lastname='$lastname', email='$email', fav_house='$fav_house', fav_character='$fav_character', leastfav_character='$leastfav_character', fav_moment='$fav_moment' WHERE id='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: welcome.php");
		}
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM survey WHERE id=$id");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$fav_house = $row['fav_house'];
			$fav_character = $row['fav_character'];
			$leastfav_character = $row['leastfav_character'];
			$fav_moment = $row['fav_moment'];

			// show form
			renderForm($id, $firstname, $lastname, $email, $fav_house, $fav_character, $leastfav_character, $fav_moment'');
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>