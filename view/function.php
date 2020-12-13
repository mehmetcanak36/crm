<?php 

function connect(){
    try{ 
 
        $servername = "localhost";
        $database = "crm";
        $username = "root";
        $password = "";
        $connect = mysqli_connect($servername, $username, $password, $database) or die (mysql_error());
       
        if (!$connect) {
            die("Connection failed: " .mysqli_connect_error());
        }
        
       }catch(Exception $e){
           echo "hata :" ,$e ;
       }
    return $connect;
}
function getcustomer($id){
    $conn=connect();
    $query="SELECT * FROM customer WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    return $data;
    
}
function getmanager($id){
    $conn=connect();
    $query="SELECT * FROM manager WHERE mid=$id";
    $data=mysqli_query($conn,$query);
    return $data;
    
}
function getdepartment($id){
    $conn=connect();
    $query="SELECT * FROM department WHERE did=$id";
    $data=mysqli_query($conn,$query);
    return $data;

}
function getinnerjoin(){
    $conn=connect();
    $query="SELECT * FROM department
    INNER JOIN customer ON customer.department_id = department.id
    INNER JOIN manager ON manager.id = customer.manager_id";
    $data=mysqli_query($conn,$query);
    return $data;

}
function deleterow($id){
    $conn=connect();
    $query="DELETE FROM customer where id = $id";
    $data = mysqli_query($conn,$query);
    header("Location: ../mainpage.php");
    return $data; 
}
?>