
<head>
<link rel="stylesheet" type="text/css" href="design.css">
<style>
table, th, td {
   
     border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 30px;
     width: 500px;
}
</style>
</head>
<div class="header">
			<ul>
				
				<li> <a href="Page.html">Home</a>
					
				</li>
				
			</ul>
		</div>
		<br>
		<br>
		<br>
		<br>
		




<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";
$sid = "";
$sname = "";
$dcode = "";
$s1 = "";
$s2 = "";
$s3 = "";
$s4 = "";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
		$iod=$id;
		
		$sql = "SELECT * FROM tb_st where id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	if($row = $result->fetch_assoc())
	{
		
$sid = $row["id"];
$sname = $row["name"];
$dcode = $row["dept_code"];
$s1 = $row["sub1"];
$s2 = $row["sub2"];
$s3 = $row["sub3"];
$s4 = $row["sub4"];
		
	}
}
  
echo "<center>
<form method='POST' action = 'student_updateaction.php'>

<br><br>
<h2 style='font-size:120%;'><u> Update Information </u></h2><br><br>
<input type='hidden' name='Iod' value = $iod>
Student ID : <input type='text' style='font-size:100%;' name='Id' value = '$sid'><br><br>
Student Name : <input type='text' style='font-size:100%;' name='Name' value = '$sname'><br><br>
Department Code : <input type='text' style='font-size:100%;' name='Dcode' value = '$dcode'><br><br>
Courses : <br>
<input type='text' style='font-size:100%;' name='S1' value = '$s1'><br><br>
<input type='text' style='font-size:100%;' name='S2' value = '$s2'><br><br>
<input type='text' style='font-size:100%;' name='S3' value = '$s3'><br><br>
<input type='text' style='font-size:100%;' name='S4' value = '$s4'><br><br>


 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>";

	
	
	
	
?>





