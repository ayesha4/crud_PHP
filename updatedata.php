<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_adress = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root", "", "mycrud");

$sql = "UPDATE student SET sname='{$stu_name}' , sadress = '{$stu_adress}', sclass = '{$stu_class}' , sphone = '{$stu_phone}' WHERE sid ={$stu_id}";
$result = mysqli_query($conn,$sql) or die("unsucessful");
//to redirect 
header ("Location:http://localhost/crud_HTML/index.php");

mysqli_close($conn);

?>