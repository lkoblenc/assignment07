<?php  
// Include config file
include_once "connect-db.php";

	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $fav_house = $_POST['fav_house'];
	 $fav_character = $_POST['fav_character'];
	 $leastfav_character = $_POST['leastfav_character'];
	 $fav_moment = $_POST['fav_moment'];

     // save the data to the database
		$result = mysqli_query($connection, "INSERT INTO survey (firstname,lastname,email,fav_house,fav_character,leastfav_character,fav_moment) VALUES ('$firstname','$lastname','$email', '$fav_house', '$

if(mysqli_query($connection, $sql))  
{  
     //echo 'Data Added';  
} 

?>
