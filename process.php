<?php
session_start();
require("connect.php");

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $_SESSION['dump'] = 'Connection success';
}

$_SESSION['title'] = $_POST['title'];
$_SESSION['details'] = $_POST['details'];

$title = $_POST['title'];
$details = $_POST['details'];

if (empty($title) || empty($details)) {
    $_SESSION['message'] = 'Please fill up correctly!';
} else {
    $_SESSION['message'] = 'Success';
    $query1 = "INSERT INTO people.bulletin (Title,Details) VALUES ('$title','$details')";
    run_mysql_query($query1);
}   
mysqli_close($connection);
header('Location: index.php');
?>
