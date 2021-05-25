<head>
<link rel="stylesheet" type="text/css" href="student.css">
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
<marquee behavior="alternate"><span class="marquee">Student Information</span></marquee>
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

$sql = "select * FROM tb_st where id!=''";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Student ID</th><th>Student Name</th><th>Department Code</th><th colspan='4'>Courses</th><th>Delete</th><th>Update</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["dept_code"]. "</td><td>" . $row["sub1"]. "</td><td>" . $row["sub2"]. "</td><td>" . $row["sub3"]. "</td><td>" . $row["sub4"]. "</td><td><a href =deled.php?id=".$row["id"].">Delete</a></td><td><a href=student_update.php?id=".$row["id"].">Update</a></td></tr>";
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