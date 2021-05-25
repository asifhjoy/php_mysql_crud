<head>
<link rel="stylesheet" type="text/css" href="faculty.css">
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
<div class="wrapper">
<marquee behavior="alternate"><span class="marquee">Faculty Information</span></marquee>
</div>
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


$conn->close();
?><br><br>
<center><input type="button" onclick="printDiv('printableArea')" value="Print Table" /></center>
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
 <br>
 <br>
 <br>
 
</html>