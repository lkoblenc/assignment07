<?php
session_start();
// connect to the database

include('renderform.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
	$fav_house = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_house']));
	$fav_character = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_character']));
	$leastfav_character = mysqli_real_escape_string($connection, htmlspecialchars($_POST['leastfav_character']));
	$fav_moment = mysqli_real_escape_string($connection, htmlspecialchars($_POST['fav_moment']));

	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $email == '' $fav_house == '' $fav_character == '' $leastfav_character == '' $fav_moment == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $email, $fav_house, $fav_character, $leastfav_character, $fav_moment, $error);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO survey (firstname, lastname, email, fav_house, fav_character, leastfav_character, fav_moment) VALUES ('$firstname', '$lastname', '$email', '$fav_house', '$fav_character', '$leastfav_character', '$fav_moment')");

		// once saved, redirect back to the view page
		header("Location: index.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','','','');
}
?>