<?php
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$conn = mysqli_connect("localhost", "root", "", "contact_form") or die("connection_failed");

$sql = "INSERT INTO database_table (First_name, Last_name, Email, Mobile) VALUES ('$firstname', '$lastname', '$email', '$mobile')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: http://localhost/cordtech/contactform.php");

mysqli_close($conn);
?>