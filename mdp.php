<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Hello <?php echo $_SESSION['loggedin_name']; ?></a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
                <li><a href="mdp.php">  MODIFIER !</a></li>
            </ul>
            


        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>
<!--Algorithm Implementation-->

<body>
    <br><br><br><br><br><br><br><br><br><br><br>
    <form action="" method="post" >
    <label for="PASS">Nouveau mdp</label>
                <input type="password" name="PASS"  id="password"><br>
    <input type="submit" value="modifier" name="FN"></form>
</body>
<?php


include 'connection.php';
if (isset($_POST['FN'])) {
    $fac = $_POST['FN'];
    $password = $_POST['PASS'];
    $id=$_SESSION['login'];
} else {
    die();
}
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "UPDATE `professeur` SET `mdp`='$password' where id_prof='$id'"  );

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
