<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM classe WHERE nom_salle = '$id' ");
if ($q) {

    header("Location:addclassrooms.php");

} else {
    echo 'Error';
}