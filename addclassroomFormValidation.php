<?php

include 'connection.php';
if (isset($_POST['CN'])) {
    $name = $_POST['CN'];
    $capacite= $_POST['capacite'];
    $batiment= $_POST['batiment'];

    //  $message = "nTry again.";
    // echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "INSERT INTO classe VALUES ('$name',0,'$capacite','$batiment')");
if ($q) {
    $message = "Classroom added.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:addclassrooms.php");
} else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // header("Location:index.html");

}
?>