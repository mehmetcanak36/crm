<?php 
include "function.php";
$table="department";
$conn=connect();
$departmentName = $_POST["dName"];
$departmentNumber = $_POST["dNumber"];
$departmentAddress= $_POST["dAddress"];
$departmentEmail =$_POST["dEmail"];
$departmentPhoneNumber = $_POST["dPhoneNumber"];

addTable($departmentName,$departmentNumber,$departmentAddress,$departmentEmail,$departmentPhoneNumber);
header('Location: department.php');

?>