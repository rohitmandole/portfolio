<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'portfolio';

$conn = mysqli_connect($host,$user,$pass,$dbname);

$sql = "INSERT INTO `rohit`(`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_query($conn, $sql);
}