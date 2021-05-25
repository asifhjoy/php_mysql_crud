
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

$ccode = "";
$cname = "";
$credit = "";




$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["course_code"];
		$iod=$id;
		
		$sql = "SELECT * FROM tb_course where course_code='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	if($row = $result->fetch_assoc())
	{
$ccode = $row["course_code"];
$cname = $row["course_name"];
$credit = $row["credit"];
		
	}
}
  
echo "<center>
<form method='POST' action = 'course_updateaction.php'>

<br><br>
<h2 style='font-size:120%;'><u> Update Information </u></h2><br><br>
<input type='hidden' name='Iod' value = $iod>
Course Code : <input type='text' style='font-size:100%;' name='Ccode' value = '$ccode'><br><br>
Course Name : <input type='text' style='font-size:100%;' name='Name' value = '$cname'><br><br>
Credit : <input type='text' style='font-size:100%;' name='Credit' value = '$credit'><br><br>



 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>";

	
	
	
	
?>





