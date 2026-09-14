<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// connecting to the mysql server
header("Refresh:3;url=http://sla25253629.stu.local/ContactUs.html");

$host = "localhost";
$username = "sla25253629_Username";
$password = "Cpanelpassword";
$dbname = "sla25253629_Randomassname";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$email     = $_POST["email"];

$sql = "INSERT INTO contacts (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

