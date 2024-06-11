<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http:
<head>
<style>
     
      .navbar {

        overflow: hidden;
        background-color: #4d72dd;
        font-family: Arial;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0  40px;
      }
      
     
      .navbar a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
        font-size: 18px;
        transition: all 0.2s ease;
      }
      
     
      .navbar a:hover {
        color: #ddd;
      }
      
     
      .navbar a.active {
        color: #4CAF50;
      }

     
      .navbar img {
        height: 50px;
        margin-right: 20px;
      }

     
      .navbar form {
        display: flex;
      }

     
      .navbar form input {
        border: none;
        padding: 10px;
        margin-right: 10px;
        font-size: 18px;
        border-radius: 5px;
      }

     
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



<form action="facultypage.php" method="post">
    <div style="margin-top: 100px" align="center">
        <select name="select_teacher" class="list-group-item">
            <option selected disabled>Select Teacher</option>
            <?php
            $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                "SELECT * FROM professeur ");
            while ($row = mysqli_fetch_assoc($q)) {
                echo " \"<option value=\"{$row['id_prof']}\">{$row['nom_prof']}</option>\"";
            }
            ?>
        </select>
        <button type="submit" id="viewteacher" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
        </button>
    </div>
</form>
<form action="facultypage.php" method="post">
    <div align="center" style="margin-top: 10px">
        <select name="select_semester" class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <button type="submit" id="viewsemester" style="margin-top: 5px" class="btn btn-success btn-lg">VIEW TIMETABLE
        </button>
    </div>
</form>

<div>
    <br>
    <style>
        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
    <div id="TT" style="background-color: #FFFFFF">
        <table border="2" cellspacing="3" align="center" id="timetable">
            <caption><strong><br><br>
                    <?php
                    if (isset($_POST['select_semester'])) {
                        echo "COMPUTER ENGINEERING DEPARTMENT SEMESTER " . $_POST['select_semester'] . " ";
                        $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from classe
                        WHERE status = '$year'"));
                        echo " ( " . $r['nom_salle'], " ) ";
                    } else if (isset($_POST['select_teacher'])) {
                        $id = $_POST['select_teacher'];
                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * from professeur
                        WHERE id_prof = '$id'"));
                        echo $r['nom_prof'];
                    } else if (isset($_SESSION['loggedin_name'])) {
                        echo $_SESSION['loggedin_name'];

                    }
                    ?>
                </strong></caption>
            <tr>
                <td style="text-align:center">WEEKDAYS</td>
                <td style="text-align:center">8:30-10:25</td>
                <td style="text-align:center">10:45-12:45</td>
                <td style="text-align:center">9:50-10:40</td>
                <td style="text-align:center">14:00-16:00</td>
                <td style="text-align:center">16:10-18:15</td>
              
            </tr>
            <tr>
                <?php
                $table = null;
                if (isset($_POST['select_semester'])) {
                    $table = " semester" . $_POST['select_semester'] . " ";
                } else if (isset($_POST['select_teacher'])) {
                    $table = " " . $_POST['select_teacher'] . " ";
                } else if (isset($_SESSION['loggedin_id'])) {
                    $table = " " . $_SESSION['loggedin_id'] . " ";
                } else
                    echo '</table>';
                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_SESSION['loggedin_id'])) {
                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM" . $table);
                    $qq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                        "SELECT * FROM module");
                    $days = array('LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI', 'SAMEDI');
                    $i = -1;
                    $str = "<br>";
                    if (isset($_POST['select_semester'])) {
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['estreserver'] == 1 && $r['semester'] == $_POST['select_semester']) {
                                $str .= $r['id_module'] . ": " . $r['nom_module'] . " ";
                                if (isset($r['prof1'])) {
                                    $id = $r['prof1'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM professeur WHERE id_prof = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['nom_prof'] . " ";
                                }
                                if ($r['course_type'] !== "LAB") {
                                    $str .= "<br>";
                                    continue;
                                } else {
                                    $str .= ", ";
                                }
                                if (isset($r['prof2'])) {
                                    $id = $r['prof2'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM professeur WHERE id_prof = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['nom_prof'] . ", ";
                                }
                                if (isset($r['prof3'])) {
                                    $id = $r['prof3'];
                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                                        "SELECT * FROM professeur WHERE id_prof = '$id'");
                                    $rr = mysqli_fetch_assoc($qqq);
                                    $str .= " " . $rr['alias'] . ": " . $rr['nom_prof'] . "<br>";
                                }
                            }
                        }
                    } else if (isset($_POST['select_teacher']) || isset($_SESSION['loggedin_id'])) {
                        if (isset($_POST['select_teacher'])) {
                            $tid = $_POST['select_teacher'];
                        } else {
                            $tid = $_SESSION['loggedin_id'];
                        }
                        while ($r = mysqli_fetch_assoc($qq)) {
                            if ($r['estreserver'] == 1 && $r['prof1'] == $tid) {
                                $str .= $r['id_module'] . ": " . $r['nom_module'] . " <br>";
                            } else if ($r['estreserver'] == 1 && isset($r['prof2']) && $r['prof2'] == $tid) {
                                $str .= $r['id_module'] . ": " . $r['nom_module'] . " <br>";
                            } else if ($r['estreserver'] == 1 && isset($r['prof3']) && $r['prof3'] == $tid) {
                                $str .= $r['id_module'] . ": " . $r['nom_module'] . " <br>";
                            }
                        }
                    }
                    while ($row = mysqli_fetch_assoc($q)) {
                        $i++;

                        echo "
                 <tr><td style=\"text-align:center\">$days[$i]</td>
                 <td style=\"text-align:center\">{$row['period1']}</td>
                <td style=\"text-align:center\">{$row['period2']}</td>
                <td style=\"text-align:center\">LUNCH</td>
                <td style=\"text-align:center\">{$row['period3']}</td>
                 <td style=\"text-align:center\">{$row['period4']}</td>
                </tr>\n";
                    }

                    echo '</table>';
                    $sign = "GENERATED VIA TIMETABLE MANAGEMENT SYSTEM, ENSA KENITRA .";
                    echo "<div align=\"center\">" . "<br>" . $str . "<br>
                            <strong>" . $sign . "<br></strong></div>";
                }
                ?>
    </div>
</div>
<script type="text/javascript">
    function gendf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('TT'), function () {
            doc.save('<?php
                    if (isset($_POST["select_semester"])) {
                        echo "ttms semester " . $_POST["select_semester"];
                    } else if (isset($_POST["select_teacher"])) {
                        echo "ttms " . $_POST["select_teacher"];
                    } else if (isset($_SESSION["loggedin_id"])) {
                        echo "ttms " . $_SESSION["loggedin_id"];
                    }
                    ?>' + '.pdf');
            alert("Downloaded!");

        });
    }

</script>
<div align="center" style="margin-top: 10px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="gendf()">SAVE AS PDF</button>
</div>


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
