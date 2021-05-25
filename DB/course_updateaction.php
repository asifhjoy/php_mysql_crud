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
	

$sql="UPDATE tb_course SET  course_code = '$_POST[Ccode]', course_name='$_POST[Name]', credit='$_POST[Credit]' WHERE course_code = '$_POST[Iod]'";


if ($conn->query($sql) == TRUE) {
    header('Location: course.php');
} else {
         echo "<center><h2>Problem To UPDATE</h2></center>";
}
	

	
mysqli_close($conn);


?>