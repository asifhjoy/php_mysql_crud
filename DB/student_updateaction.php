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
	

$sql="UPDATE tb_st SET id = '$_POST[Id]', name='$_POST[Name]', dept_code='$_POST[Dcode]', sub1 = '$_POST[S1]', sub2 = '$_POST[S2]',sub3 = '$_POST[S3]',sub4 = '$_POST[S4]'  WHERE id = '$_POST[Iod]'";


if ($conn->query($sql) == TRUE) {
    header('Location: student.php');
} else {
         echo "<center><h2>Problem To UPDATE</h2></center>";
}
	

	
mysqli_close($conn);


?>