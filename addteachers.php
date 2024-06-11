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


<div align="center" style="margin-top:20px">
    <button id="teachermanual" class="btn btn-success btn-lg">ADD TEACHER</button>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Teacher</h2>
        </div>
        <div class="modal-body" id="EnterTeacher">
            <!--Admin Login Form-->
            <div style="display:none" id="addTeacherForm">
                <form action="addteacherFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="teachername">Teacher's name</label>
                        <input type="text" class="form-control" id="teachername" name="TN"
                               placeholder="Teacher's name ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Faculty No</label>
                        <input type="text" class="form-control" id="facultyno" name="TF" placeholder="Faculty No ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Alias</label>
                        <input type="text" class="form-control" id="alias_name" name="AL" placeholder="Alias..">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>

                        <select class="form-control" id="designation" name="TD">
                            <option selected disabled>Select</option>
                            <option value="Professor">Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Guest Faculty">Guest Faculty</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="teachercontactnumber">Contact No.</label>
                        <input type="text" class="form-control" id="teachercontactnumber" name="TP"
                               placeholder="+91 ...">
                    </div>

                    <div class="form-group">
                        <label for="teacheremail">Email-ID</label>
                        <input type="text" class="form-control" id="teacheremail" name="TE"
                               placeholder="abc@xyz.com ...">
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
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
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

<script>
        function deleteHandlers() {
            var table = document.getElementById("teacherstable");
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
                                window.location.href = "deleteteacher.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>

    <table id=teacherstable style="margin-left: 80px">
        <caption><strong>Teacher's Information </strong></caption>
        <tr>
            <th width="130">Faculty No</th>
            <th width=290>name</th>
            <th width=50>Alias</th>
            <th width="190">Designation</th>
            <th width="190">Contact No.</th>
            <th width="290">Email ID</th>
            <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM professeur ORDER BY id_prof ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['id_prof']}</td>
                    <td>{$row['nom_prof']}</td>
                    <td>{$row['alias']}</td>
                    <td>{$row['designation']}</td>
                    <td>{$row['numero_tele']}</td>
                    <td>{$row['email']}</td>
                   <td>
                    <button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

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
