<?php

$stu_name = $_POST['sname'];
$stu_city = $_POST['scity'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];



$conn = mysqli_connect("localhost", "root", "", "crud") or die("conn Failed");

$sql = "INSERT INTO student(sname, scity, sclass,  sphone) VALUES ('{$stu_name}','{$stu_city}','{$stu_class}','{$stu_phone}')";


$result = mysqli_query($conn, $sql) or die("Query unsuccessfull.");

header('Location: http://localhost/crud/index.php');
mysqli_close($conn);
