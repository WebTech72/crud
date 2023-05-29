<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_city = $_POST['scity'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];



$conn = mysqli_connect("localhost", "root", "", "crud") or die("conn Failed");

$sql = "UPDATE student SET sname='{$stu_name}', scity= '{$stu_city}', sclass= '{$stu_class}', sphone = '{$stu_phone}'
WHERE sid = {$stu_id}";


$result = mysqli_query($conn, $sql) or die("Query unsuccessfull.");

header('Location: http://localhost/crud/index.php');
mysqli_close($conn);
