<?php

session_start();
include 'connection.php';
if (isset($_POST['UN']) && isset($_POST['PASS'])) {
    $id = $_POST['UN'];
   
    $password = $_POST['PASS'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT login  FROM admin WHERE login = '$id' and password = '$password' ");
if (mysqli_num_rows($q) == 1) {
    header("Location:db.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>


