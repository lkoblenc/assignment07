<?php

include_once'connect-db.php';

 	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $fav_house = $_POST['fav_house'];
	 $fav_character = $_POST['fav_character'];
	 $leastfav_character = $_POST['leastfav_character'];
	 $fav_moment = $_POST['fav_moment'];

     // save the data to the database
		$result = mysqli_query($connection, "INSERT INTO survey (firstname,lastname,email,fav_house,fav_character,leastfav_character,fav_moment) VALUES ('$firstname','$lastname','$email', '$fav_house', '$fav_character', '$leastfav_character', '$fav_moment')");
       // header("location: survey.php submit=success");

// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part
// **********************************
// SECTION ONE: set all the variables
// **********************************
// set some variables
$emailFrom = "yding25@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = $_POST['email'];
$subject = "Games of Thrones Survey";

//   HTML form EXACTLY...
// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['firstname'])); 
$lastname = Trim(stripslashes($_POST['lastname']));
$email = Trim(stripslashes($_POST['email'])); 
// this is from all the INPUT type="radio" fields...
$fav_house= $_POST['fav_house']; 
$fav_character = $_POST['fav_character'];
$leastfav_character = $_POST['leastfav_character'];
// notice: no matter how many radio buttons, there's only one answer
// this is from the TEXTAREA field...
$fav_moment = Trim(stripslashes($_POST['fav_moment'])); 
// **********************************
// SECTION TWO: build the email body
// **********************************
// $body = "Information"; // initialize the variable, then start concatenating
//             // backslash-n means new-line in emails
$body .= "Hi "; //...a label
$body .= $name;      //...a variable
$body .= ",\n\n";              //...a new line
$body .= "Thank you for visiting the website and filling out our survey\n";
$body .= "This email is from "; //...a label
$body .= $subject;      //...a variable
$body .= ".\n\n";              //...a new line
 
$body .= "What is your favorite house from Game of Thrones? \n";       // a heading for your radio button section
$body .= $fav_house;         // the (one) radio button variable
$body .= "\n\n";

$body .= "Who are your top 5 favorite Game of Thrones characters? \n";       // a heading for your radio button section 
$body .= $fav_character;         // the (one) radio button variable
$body .= "\n\n";

$body .= "Have you ever heard of Michelin restaurant guides before? \n";       // a heading for your radio button section 
$body .= $leastfav_character;         // the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Favorite Game of Throne Moment: \n";       // a heading for your text area
$body .= $fav_moment;            // the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...
// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");
//end the PHP block here...
?>

<!-- **********************************
     SECTION FOUR: thank the user in HTML;
     Below, there needs to be an HTML 
     webpage with a customized message 
     for the user
     ********************************** -->

<!DOCTYPE HTML>
<html>

<?php include "inc/header.php";?>

<body>

	 	<h2>Thank You! <?php echo $name; ?></h2>
 		<p>Go back to <a href="survey.php">survey</a>.</p>

<?php include "inc/footer.php";?>

</body>
</html>

<?php
	mysqli_close($connection);
?>