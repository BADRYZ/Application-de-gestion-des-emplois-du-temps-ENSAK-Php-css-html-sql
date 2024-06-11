<?php

session_start();
$class = $_GET["i"];
$str = "<option selected disabled>Select</option>";
$days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$day = $days[($class - 8) / 8];
$periods = array("period1", "period2", "period3", "period4");
$period = $periods[($class - 1) % 8];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * FROM professeur ");
while ($row = mysqli_fetch_assoc($q)) {
    $query = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), "SELECT * FROM " . $row['id_prof'] . " WHERE jour = '$day'");
    $r = mysqli_fetch_assoc($query);
    if ($r[$period] == "-<br>-" || $r[$period] == "-<br>" || $r[$period] == "-") {
        $str .= " \"<option value=\"{$row['id_prof']}\">{$row['nom_prof']}</option>\"";
    }
}
echo $str;
?>