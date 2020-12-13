<?php 
include "function.php";
#$conn=connect();
$id = $_GET["id"];
deleterow($id);
#header('Location: department.php')

?>