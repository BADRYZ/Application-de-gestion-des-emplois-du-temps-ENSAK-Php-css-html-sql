<?php

include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM professeur WHERE id_prof = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $drop);
if ($drop) {

    header("Location:addteachers.php");

} else {
    echo 'Error';
}
?>

