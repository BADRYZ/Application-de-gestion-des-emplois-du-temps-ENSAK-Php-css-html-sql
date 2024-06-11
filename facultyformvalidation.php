<?php

session_start();
include 'connection.php';
if (isset($_POST['FN'])) {
    $fac = $_POST['FN'];
    $password = $_POST['PASS'];
    $_SESSION['login']=$fac;
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT nom_prof,mdp FROM professeur WHERE id_prof = '$fac' and  mdp = '$password'"  );
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    $_SESSION['loggedin_name'] = $row['nom_prof'];
    $_SESSION['loggedin_id'] = $fac;
    header("Location:facultypage.php");
} else {
    $message = "Username incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
if (mysqli_num_rows($q) == 1) {
    $row = mysqli_fetch_assoc($q);
    echo 'welcome ' . $row['nom_prof'];
} else {
    $message = "Invalid Faculty Number.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>