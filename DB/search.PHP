<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
<style>
table, th, td {
     border: 3px solid black;
     border-collapse:collapse;
     text-align: center;
     color: black;
     margin: auto;
     height: 30px;
     width: 900px;
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
  

<center>
<form method="POST" style="text-align:center">


<h2 style="font-size:150%;"> Search ID:
</h2>
<input type="text" style="font-size:100%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<div id="printableArea">
  

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_course";
$p_id="";
$s1="";
$s2="";
$s3="";
$s4="";
$credit=0;
if(isset($_POST["search_id"])){
$p_id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_st,tb_dept where id='$p_id' AND tb_st.dept_code=tb_dept.dept_code";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row



  echo "<br><br>";
  echo "<table><tr><th><center>Student ID</th><th>Student Name</th><th>Department</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {

$s1=$row["sub1"];
$s2=$row["sub2"];
$s3=$row["sub3"];
$s4=$row["sub4"];
  echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>" . $row["name"]."</td><td>" . $row["dept_name"]."</td>";
  echo "</tr>";
    }
echo "</table>";

echo "<br><br><br>";
$sql = "SELECT a.course_code,a.course_name,a.credit,b.fac_name,b.section FROM tb_course a,tb_faculty b where (a.course_code='$s1' or a.course_code='$s2' or a.course_code='$s3' or a.course_code='$s4') AND a.fac_id=b.fac_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
     echo "<table><tr><th>Course Code</th><th>Course Name</th><th>Credit</th><th>Faculty</th><th>Section</th></tr>";
   
     // output data of each row
     while($row = $result->fetch_assoc()) {

      $credit=$credit+$row["credit"];

   echo "<tr><td>"  . $row["course_code"]."</td><td>". $row["course_name"]. "</td><td>" . $row["credit"]. " </td><td>". $row["fac_name"]."</td><td>". $row["section"]."</td>";
     }

  
    echo "<tr><td colspan = '2'> Total Credit </td><td>". $credit. "</td></tr>" ; 
  
     echo "</table>";
} else {
     echo "0 results";
}


} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}


mysqli_close($conn);
?> <br><br><br>
<center><input type="button" onclick="printDiv('printableArea')" value="Print Offered Courses" /></center>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
<br><br><br>
</div>
</body>
</html>



