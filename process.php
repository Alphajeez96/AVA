<?php
include('./includes/scripts.php');

$email =$_POST['email'];

//Filter email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);


//Validate Email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo("$email is a valid email address");

$servername = "us-cdbr-east-02.cleardb.com";
$username = "be2cfa79c3c772";
$password = "1e3d24ce";
$dbname = "heroku_03515f5148d504d";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (user_email)
VALUES ('$email')";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  ?>

<?php
  header("location: index.php");
?>


  <?php 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{
  echo("$email is not a valid email address");

  
}

