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
	

$sql="UPDATE tb_dept SET  dept_code='$_POST[Dcode]',dept_name='$_POST[Name]' WHERE dept_code = $_POST[Iod]";


if ($conn->query($sql) == TRUE) {
    header('Location: department.php');
} else {
         echo "<center><h2>Problem To UPDATE</h2></center>";
}
	

	
mysqli_close($conn);


?>