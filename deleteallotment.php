<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "UPDATE module  SET estreserver = '0' , prof1 = '',prof2 = '',prof3 = '' WHERE id_module = '$id' ");
if ($q) {

    header("Location:allotclasses.php");

} else {
    echo 'Error';
}