<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
	{
		die("Connection failed: ");
	}
	

$sql="UPDATE tb_faculty SET fac_id = '$_POST[Id]', fac_name='$_POST[Name]', course_code='$_POST[Ccode]', section = '$_POST[Sec]' WHERE fac_id = '$_POST[Iod]'";


if ($conn->query($sql) == TRUE) {
    header('Location: faculty.php');
} else {
         echo "<center><h2>Problem To UPDATE</h2></center>";
}
	

	
mysqli_close($conn);


?>