<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "UPDATE classe  SET filiere = '0'  WHERE nom_salle = '$id' ");
if ($q) {

    header("Location:allotclasses.php");

} else {
    echo 'Error';
}