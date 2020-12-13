<?php 
include "function.php";
$table="customer";

#$conn=connect();
$id = $_POST["idc"];
$customerName = $_POST["cName"];
$costumerLastName = $_POST["cLastName"];
$costumerEmail =$_POST["cEmail"];
$costumerAddress = $_POST["cAddress"];
$customerManager = $_POST["manager_id"];
$customerDepartment= $_POST["department_id"];

updatecustomer($id,$customerName,$costumerLastName,$costumerEmail,$costumerAddress,$customerManager,$customerDepartment);
header('Location: customer.php');

?>