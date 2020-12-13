<?php 
include "function.php";
$username=$_POST['username'];
$password=$_POST['password'];
#echo $password,$username;
$data=control($username,$password);
if(isset($data)){
    header('Location: mainpage.php');
}
else{
    header('Location: login.php');
}
/*foreach($data as $d){
        print_r( $d['smUserName'],$d['smPassword']);
       # header('Location: mainpage.php');    

} */


?>