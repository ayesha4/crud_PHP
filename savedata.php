<?php


 $stu_name = $_POST['sname'];
 $stu_adress = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];
$conn=mysqli_connect("localhost","root", "", "mycrud");

$sql ="INSERT INTO student (sname,sadress,sclass,sphone) VALUES
 ('{$stu_name}','{$stu_adress}','{$stu_class}','{$stu_phone}') ";

$result = mysqli_query($conn,$sql) or die("unsucessful");
//to redirect 
header ("Location:http://localhost/crud_HTML/index.php");

mysqli_close($conn);

?>