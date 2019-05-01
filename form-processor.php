<?php
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
// $txt = "Dear,";
// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable
// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...
// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$address = Trim(stripslashes($_POST['address'])); 
// this is from all the INPUT type="radio" fields...
$favorite = $_POST['favorite']; 
// notice: no matter how many radio buttons, there's only one answer
// // this is from the TEXTAREA field...
// $_____________ = Trim(stripslashes($_POST['_____________'])); 
// **********************************
// SECTION TWO: build the email body
// **********************************
// $body = "Information"; // initialize the variable, then start concatenating
//             // backslash-n means new-line in emails
$body .= "Hi"; //...a label
$body .= $name;      //...a variable
$body .= ",\n\n";              //...a new line
$body .= "Thank you for visiting the website and filling out our survey\n";
$body .= "This email is from "; //...a label
$body .= $subject;      //...a variable
$body .= ".\n\n";              //...a new line
 
$body .= "What is your favorite house from Game of Thrones? \n";       // a heading for your radio button section
$favorite .= $_POST['favorite'];  
$body .= "You have selected:".  $favorite.".";         // the (one) radio button variable
$body .= "\n\n";

$body .= "Who are your top 5 favorite Game of Thrones characters? \n";       // a heading for your radio button section
$fav2 .= $_POST['fav2'];  
$body .= "You selected:".  $fav2.".";         // the (one) radio button variable
$body .= "\n\n";

$body .= "Have you ever heard of Michelin restaurant guides before? \n";       // a heading for your radio button section
$least .= $_POST['least'];  
$body .= "You selected:".  $least.".";         // the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Favorite Game of Throne Moment: \n";       // a heading for your text area
$body .= "You wrote:".    $moment;            // the variable for your text area
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

<?php include "inc/header.php";?>

<body>

	 	<h2>Thank You! <?php echo $name; ?></h2>
 		<p>Go back to <a href="survey.php">survey</a>.</p>

<?php include "inc/footer.php";?>

</body>