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

$sql = "INSERT INTO tb_dept (dept_code, dept_name)
VALUES ($_POST[Code],'$_POST[Name]')";

if ($conn->query($sql) == TRUE) {
    header('Location: departmentview.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT</h2></center>";
}

$conn->close();
?>