<?php 
include "function.php";
$table="manager";
$conn=connect();
$mName = $_POST["mName"];
$mLastName = $_POST["mLastName"];
$mEmail= $_POST["mEmail"];
$mAddress =$_POST["mAddress"];
$mRole=$_POST['mRole'];
#echo $customerName,$customerLastName,$customerEmail,$customerAddress;
addTable($mName,$mLastName,$mEmail,$mAddress,$mRole);
header('Location: manager.php');

?>