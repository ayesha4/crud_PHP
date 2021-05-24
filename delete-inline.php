<?php 

$stu_id =$_GET['id'];

include 'config.php';
//run a query
$sql = "DELETE FROM student WHERE sid = {$stu_id}" or die ("check query");

$result= mysqli_query($conn,$sql) or die("qery unsucess");

header ("Location:http://localhost/crud_HTML/index.php");

mysqli_close($conn);


?>