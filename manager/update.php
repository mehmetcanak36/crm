<?php 
include "function.php";
$table="manager";

#$conn=connect();
$id = $_POST["idm"];
$mName = $_POST["mName"];
$mLastName = $_POST["mLastName"];
$mEmail =$_POST["mEmail"];
$mAddress = $_POST["mAddress"];
$mRole=$_POST["mRole"];

updatemanager($id,$mName,$mLastName,$mEmail,$mAddress,$mRole);
header('Location: manager.php');

?>