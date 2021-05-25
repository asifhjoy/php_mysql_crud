
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
$facid = "";
$facname = "";
$ccode = "";
$sec = "";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["fac_id"];
		$iod=$id;
		
		$sql = "SELECT * FROM tb_faculty where fac_id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	if($row = $result->fetch_assoc())
	{
		
$facid = $row["fac_id"];
$facname = $row["fac_name"];
$ccode = $row["course_code"];
$sec = $row["section"];
		
	}
}
  
echo "<center>
<form method='POST' action = 'faculty_updateaction.php'>

<br><br>
<h2 style='font-size:120%;'><u> Update Information </u></h2><br><br>
<input type='hidden' name='Iod' value = $iod>
Faculty ID : <input type='text' style='font-size:100%;' name='Id' value = '$facid'><br><br>
Faculty Name : <input type='text' style='font-size:100%;' name='Name' value = '$facname'><br><br>
Course Code : <input type='text' style='font-size:100%;' name='Ccode' value = '$ccode'><br><br>
Section : <input type='text' style='font-size:100%;' name='Sec' value = '$sec'><br><br>


 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>";

	
	
	
	
?>





