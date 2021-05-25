
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
$dcode="";
$dname="";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["dept_code"];
		$iod=$id;
		
		$sql = "SELECT * FROM tb_dept where dept_code='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	if($row = $result->fetch_assoc())
	{
		


$dcode = $row["dept_code"];
$dname = $row["dept_name"];
		
	}
}
  
echo "<center>
<form method='POST' action = 'dept_updateaction.php'>

<br><br>
<h2 style='font-size:120%;'><u> Update Information </u></h2><br><br>
<input type='hidden' name='Iod' value = $iod>
Department Code : <input type='number' style='font-size:100%;' name='Dcode' value = '$dcode'><br><br>
Department Name : <input type='text' style='font-size:100%;' name='Name' value = '$dname'><br><br>


 <button class='button' ><b><big>Submit</big></button>
  <br><br>
</form>";

	
	
	
	
?>





