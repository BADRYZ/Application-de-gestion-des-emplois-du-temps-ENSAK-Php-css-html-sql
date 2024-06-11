
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
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
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
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

<form action="allotmentpracticalFormvalidation.php" method="post" style="margin-top: 100px">
    <div align="center">
        <select name="tobealloted" class="list-group-item">
            <?php
            include 'connection.php';
            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM module WHERE tp_cours = 'LAB'");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Subject</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    if ($row['estreserver'] == 1)
                        continue;
                    $mystring .= '<option value="' . $row['id_module'] . '">' . $row['nom_module'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM professeur ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['id_prof'] . '">' . $row['nom_prof'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted2" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM professeur ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['id_prof'] . '">' . $row['nom_prof'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 5px">
        <select name="toalloted3" class="list-group-item">
            <?php
            include 'connection.php';

            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM professeur ");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
         <option selected disabled>Select Teacher</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    $mystring .= '<option value="' . $row['id_prof'] . '">' . $row['nom_prof'] . '</option>';
                }

                echo $mystring;
            }
            ?>
        </select>
    </div>

    </div>
    <div align="center" style="margin-top: 10px">
        <button type="submit" class="btn btn-success btn-lg">Allot</button>
    </div>
</form>
<?php

include 'connection.php';
if (isset($_GET['name'])) {
    $id = $_GET['name'];
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "UPDATE module  SET estreserver = '0' , prof1 = '',prof2 = '',prof3 = '' WHERE id_module = '$id' ");

}


?>
<script>
    function deleteHandlersForPractical() {
        var table = document.getElementById("allotedpracticalstable");
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            //var b = currentRow.getElementsByTagName("td")[0];
            var createDeleteHandler =
                function (row) {
                    return function () {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;
                        var x;
                        if (confirm("Are You Sure?") == true) {
                            // window.location.href = "deletepracticalallotment.php?name=" + id;
                            window.location.href = "allotpracticals.php?name=" + id;
                        }

                    };
                };

            currentRow.cells[8].onclick = createDeleteHandler(currentRow);
        }
    }
</script>
<style>
    table {
        margin-top: 70px;
        margin-bottom: 50px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: 80px;
        width: 90%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<table id=allotedpracticalstable>
    <caption><strong>PRACTICAL COURSES ALLOTMENT</strong></caption>
    <tr>
        <th width="130">Subject Code</th>
        <th width=200>Subject Title</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="120">Faculty No</th>
        <th width="300">Teacher's Name</th>
        <th width="40">Action</th>
    </tr>
    <tbody>
    <?php
    include 'connection.php';
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
        "SELECT * FROM module");

    while ($row = mysqli_fetch_assoc($q)) {
        if ($row['estreserver'] == 0)
            continue;
        if (!($row['tp_cours'] == "LAB"))
            continue;
        $teacher_id1 = $row['prof1'];
        $teacher_id2 = $row['prof2'];
        $teacher_id3 = $row['prof3'];
        $t1 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT nom_prof FROM professeur WHERE id_prof = '$teacher_id1'");
        $trow1 = mysqli_fetch_assoc($t1);
        $t2 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT nom_prof FROM professeur WHERE id_prof = '$teacher_id2'");
        $trow2 = mysqli_fetch_assoc($t2);
        $t3 = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT nom_prof FROM professeur WHERE id_prof = '$teacher_id3'");
        $trow3 = mysqli_fetch_assoc($t3);
        echo "<tr><td>{$row['id_module']}</td>
                    <td>{$row['nom_module']}</td>
                    <td>{$row['prof1']}</td>
                    <td>{$trow1['nom_prof']}</td>
                    <td>{$row['prof2']}</td>
                    <td>{$trow2['nom_prof']}</td>
                    <td>{$row['prof3']}</td>
                    <td>{$trow3['nom_prof']}</td>
                   <td>
                    <button>Delete</button></td>
                    </tr>\n";
    }
    echo "<script>deleteHandlersForPractical();</script>";
    ?>
    </tbody>
</table>

<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

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
