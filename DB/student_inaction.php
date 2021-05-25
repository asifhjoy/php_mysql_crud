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

$sql = "INSERT INTO tb_st (id, name, dept_code, sub1, sub2, sub3, sub4)
VALUES ('$_POST[Sid]','$_POST[Name]','$_POST[D_code]','$_POST[Sub1]','$_POST[Sub2]','$_POST[Sub3]','$_POST[Sub4]')";

if ($conn->query($sql) == TRUE) {
    header('Location: studentview.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}

$conn->close();
?>