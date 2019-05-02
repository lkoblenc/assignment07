<?php
// Initialize the session
session_start();?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Survey Responses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

 <?php if(isset($_SESSION['username'])) { ?>
    <a href="logout.php">Logout</a>
    <?php } else { ?>
    <a href="login.php">Login</a>
    <?php } ?>

<?php
// connect to the database
include('connect-db.php');
// get results from database
$result = mysqli_query($connection, "SELECT * FROM survey");
?>

<table>
  <thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Email</th>
    <th scope="col">Favorite House</th>
    <th scope="col">Favorite Character</th>
    <th scope="col">Leat Favorite Character</th>
    <th scope="col">Favorite Moment</th>
    <th scope="col">Date</th>

    <?php if(isset($_SESSION['username'])) { ?>
      <th scope="col" colspan="2"><em>functions</em></th>
    <?php } ?>
  </tr>
  </thead>
  </body>
</html>

<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
<tbody>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['fav_house']; ?></td>
    <td><?php echo $row['fav_character']; ?></td>
    <td><?php echo $row['leastfav_character']; ?></td>
    <td><?php echo $row['fav_moment']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <?php if(isset($_SESSION['username'])) { ?>
      <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
      <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    <?php } ?>
  </tr>
</body>

<?php
// close the loop
}
?>
</table>

<div>
  <br>
    <?php if(isset($_SESSION['username'])) { ?>
    <a href="new.php">Add a new record</a>
  <?php } ?>
</div>
</div>
</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>
