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

$sql = "INSERT INTO tb_course (course_code, course_name, credit, fac_id)
VALUES ('$_POST[Code]','$_POST[Course]','$_POST[Credit]','$_POST[Fid]')";

if ($conn->query($sql) == TRUE) {
    header('Location: courseview.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}

$conn->close();
?>