<?php 
include "function.php";
$table="department";

#$conn=connect();
$id = $_POST["id1"];
$departmentName = $_POST["dName"];
$departmentNumber = $_POST["dNumber"];
$departmentAddress= $_POST["dAddress"];
$departmentEmail =$_POST["dEmail"];
$departmentPhoneNumber = $_POST["dPhoneNumber"];

updatedepartment($id,$departmentName,$departmentNumber,$departmentAddress,$departmentEmail,$departmentPhoneNumber);
header('Location: department.php');

?>