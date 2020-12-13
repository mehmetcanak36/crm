<?php 
include "function.php";
$table="customer";
$conn=connect();
$customerName = $_POST["cName"];
$customerLastName = $_POST["cLastName"];
$customerEmail= $_POST["cEmail"];
$customerAddress =$_POST["cAddress"];
$cmanager_id=$_POST["management_id"];
$cdepartment_id=$_POST["department_id"];

#echo $customerName,$customerLastName,$customerEmail,$customerAddress;
addTable($customerName,$customerLastName,$customerEmail,$customerAddress,$cmanager_id,$cdepartment_id);
header('Location: customer.php');

?>