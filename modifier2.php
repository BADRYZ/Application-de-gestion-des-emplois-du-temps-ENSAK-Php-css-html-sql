<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
      /* Navbar container */
      .navbar {

        overflow: hidden;
        background-color: #4d72dd;
        font-family: Arial;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0  40px;
      }
      
      /* Navbar links */
      .navbar a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
        font-size: 18px;
        transition: all 0.2s ease;
      }
      
      /* Navbar links on hover */
      .navbar a:hover {
        color: #ddd;
      }
      
      /* Active/current navbar link */
      .navbar a.active {
        color: #4CAF50;
      }

      /* Add a logo */
      .navbar img {
        height: 50px;
        margin-right: 20px;
      }

      /* Add a search form */
      .navbar form {
        display: flex;
      }

      /* Add input fields for search */
      .navbar form input {
        border: none;
        padding: 10px;
        margin-right: 10px;
        font-size: 18px;
        border-radius: 5px;
      }

      /* Add a submit button for search */
      .navbar form button {
        background-color: #097AC8;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.2s ease;
      }
      /* Change the button color on hover */
      .navbar form button:hover {
        background-color: #3e8e41;
      }
    </style>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <style>body{
  text-align: center;
  margin: 2px;
}

h2{
  text-align: left;
  background-color: rgb(7, 71, 100);
  padding: 8px;
  color: white;
}


  img{
      width: 80px;
  }

  table{
      margin: auto;
      width: 100%;
      text-align: left;
  }

  td , th {
    border-bottom: 1px solid black;
    padding: 8px;
    border-bottom-style: solid;
    border-bottom-width: 2px;

  }

p{
  font-size: 40px;
  margin: auto;
}
select, input{
  width: 10%;
  height: 30px;
  text-align: left;
}

input[type=text] {
  border: 2px solid;
  border-radius: 4px;
  background-color: #f1f1f1;
}</style>
    <!-- Google	Fonts -->
</head>
<body>

<div class="navbar">
      <a href="db.php">

        <img src="photo\cropped-ensak-logo.png" alt="Logo">
        <strong><a href="db.php">Home</a></strong>
      </a>
      <div class="s">
      
      <strong><a href="index.php">log out</a></strong>
    </div>
      
    </div>  

<body>
    <br><br><br><br><br><br>
    <form action="" method="post" >
    <label for="PASS">Nouveau mdp</label>
                <input type="password" name="PASS"  id="password"><br>
 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="submit" value="         modifier" name="FN"></form>
</body>
<?php


include 'connection.php';
if (isset($_POST['FN'])) {
    $password = $_POST['PASS'];
} else {
    die();
}                               
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "UPDATE `admin` SET `password`='$password'"  );

    header("Location:facultypage.php");

?>

<!--HOME SECTION END-->


<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>
</html>
