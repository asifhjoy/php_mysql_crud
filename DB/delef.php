<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["fac_id"];
$sql = "DELETE FROM tb_faculty WHERE tb_faculty.fac_id = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: faculty.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>