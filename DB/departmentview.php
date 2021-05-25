<head>
<link rel="stylesheet" type="text/css" href="department.css">
<style>
table, th, td {
     border: 3px solid black;
     color: black;
     border-collapse:collapse;
     text-align: center;
     margin: auto;
     height: 50px;
     width: 1200px;
}
</style>
</head><br>
<body>
<div class="header">
               <ul>
                    
                    <li> <a href="Page.html">Home</a>
                         
                    </li>
                    
                    
               </ul>
          </div>
          <br>
          <br>
          <br>
<center>
<div class="wrapper">
<marquee behavior="alternate"><span class="marquee">Department Information</span></marquee>
</div>
</center>
<br>
<br>
<br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * FROM tb_dept where dept_code!= '' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Department ID</th><th>Department Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["dept_code"]. "</td><td>" . $row["dept_name"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?><br><br>

</body>
<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
</html>