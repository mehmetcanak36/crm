<?php 
include "function.php";
$conn=connect();
$id = $_GET["id"];
deletecustomer($id);
#header('Location: department.php')

?>