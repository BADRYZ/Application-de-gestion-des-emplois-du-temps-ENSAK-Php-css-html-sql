<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM module WHERE id_module = '$id' ");
if ($q) {

    header("Location:addsubjects.php");

} else {
    echo 'Error';
}
?>

