<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_GET["email"];
$msg=$_GET["msg"];

$sql = "INSERT INTO contact (Email, Message)
VALUES ('$email', '$msg')";

if ($conn->query($sql) === TRUE) {
    echo "Your message has been sent successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>