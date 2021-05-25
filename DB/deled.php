<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
$sql = "DELETE FROM tb_st WHERE tb_st.id = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: student.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>