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
<div align="center"
     style="margin-top:10%">
    <button
        id="classroommanual" class="btn btn-success btn-lg">ADD CLASSROOM
    </button>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Classroom</h2>
        </div>
        <div class="modal-body" id="EnterClassroom">
            <!--Admin Login Form-->
            <div style="display:none" id="addClassroomForm">
                <form action="addclassroomFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="classroomname">Name</label>
                        <input type="text" class="form-control" id="classroomname" name="CN"
                               placeholder="ML 32, NL 33 ...">
                    </div>
                    <div class="form-group">
                        <label for="batiment">Batiment</label>
                        <input type="text" class="form-control" id="classroomname" name="batiment"
                               placeholder="A,B,C ...">
                    </div>
                    <div class="form-group">
                        <label for="capacite">capacite</label>
                        <input type="text" class="form-control" id="classroomname" name="capacite"
                               placeholder="50,100,150 ...">
                    </div>
                
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addclassroomBtn = document.getElementById("classroommanual");
    var heading = document.getElementById("popupHead");
    var classroomForm = document.getElementById("addClassroomForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addclassroomBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        classroomForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        classroomForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    function deleteHandlers() {
        var table = document.getElementById("classroomstable");
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
                            window.location.href = "deleteclassroom.php?name=" + id;

                        }

                    };
                };
            currentRow.cells[1].onclick = createDeleteHandler(currentRow);
        }
    }
</script>

<div align="center">
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
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


    <table id=classroomstable>
        <caption><strong>ADDED CLASSROOMS</strong></caption>
        <tr>

            <th width="100">Name</th>
            <th width="60">Action</th>
        </tr>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM classe ");
        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['nom_salle']}</td>
                    <td><button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
    </table>
</div>

--></div>
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
