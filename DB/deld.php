<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["dept_code"];
$sql = "DELETE FROM tb_dept WHERE tb_dept.dept_code = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: department.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>