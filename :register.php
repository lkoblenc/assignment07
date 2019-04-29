<?php
// Include config file
require_once "connect-db.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM adesai_users WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO adesai_users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game of Thrones|Register</title>
</head>
<body>

	<header>
		<a href="index.php">
			<img src="images/gameofthroneslogo.png" alt="GOT Logo">
		</a>

<?php include "inc/head.inc" ?>

	</header>
	<section>
		<h1>Sign Up!</h1>
        <p>Please fill this form to create an account.</p>
        <form method="post" action="#">

			<label>Username</label><br>
                <input type="text" name="username"><br>

            <label>Password</label><br>
                <input type="password" name="password"><br>

            <label>Confirm Password</label><br>
                <input type="password" name="confirm_password"><br><br>

            <input type="submit" value="Submit">

            <p>Already have an account? <a href="login.php">Login here</a>.</p>
			
		</form>

	</section>
	<footer>
		<cite>This website was created by team Rochester.</cite>
		<div>Content gathered from <a href="gameofthrones.fandom.com">gameofthrones.fandom.com</a>, <a href="awoiaf.westeros.org">awoiaf.westeros.org</a>, and <a href="en.wikipedia.org/wiki/Game_of_Thrones">wikipedia.org</a>.</div>
		<div>
			CSC 174 | Advance Front-End Web Developement
		</div>
	</footer>
</body>
</html>