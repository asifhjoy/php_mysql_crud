<head>
<link rel="stylesheet" type="text/css" href="design.css">
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
<body><div class="header">
               <ul>
                    
                    <li> <a href="Page.html">Home</a>
                         
                    </li>
                    
                    
               </ul>
          </div>
          <br>
          <br>
          <br>
<center>

<marquee behavior="alternate"><span class="marquee">Information</span></marquee>

</center>
<br>
<br>
<br>

<div id="printableArea">
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
echo"<center><h1><u>Department</u></h1>";
$sql = "select * FROM tb_dept";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Department Code</th><th>Department Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["dept_code"]. "</td><td>" . $row["dept_name"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
echo"<br><br>";
echo"<center><h1><u>Faculty</u></h1>";
$sql = "select * FROM tb_faculty where fac_id!=''";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Faculty ID</th><th>Faculty Name</th><th>Course Name</th><th>Section</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["fac_id"]. "</td><td>" . $row["fac_name"]. "</td><td>" . $row["course_code"]. "</td><td>" . $row["section"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
echo"<br><br>";
echo"<center><h1><u>Course</u></h1>";
$sql = "select * FROM tb_course where course_code!=''";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Course Code</th><th>Course Name</th><th>Credit</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["course_code"]. "</td><td>" . $row["course_name"]. "</td><td>" . $row["credit"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
echo"<br><br>";
echo"<center><h1><u>Student</u></h1>";
$sql = "select id,name,dept_name FROM tb_st,tb_dept WHERE tb_st.dept_code=tb_dept.dept_code";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table align='center'><tr><th>Student ID</th><th>Student Name</th><th>Department</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["dept_name"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?><br><br>
<center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
</div>
</body>
<br>
<br>
<br>
 

<br>
<br>
<br>
</html>