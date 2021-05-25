<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO tb_faculty (fac_id, fac_name, course_code, section)
VALUES ('$_POST[Id]','$_POST[Name]','$_POST[C_code]','$_POST[Sec]')";

if ($conn->query($sql) == TRUE) {
    header('Location: facultyview.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}

$conn->close();
?>