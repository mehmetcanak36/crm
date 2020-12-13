<?php 
include "function.php";
$conn=connect();
$id = $_GET["did"];
deletedepartment($id);
#header('Location: department.php')

?>