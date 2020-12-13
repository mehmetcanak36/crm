<?php 
include "function.php";
#$conn=connect();
$id = $_GET["mid"];
deletemanager($id);
#header('Location: department.php')

?>