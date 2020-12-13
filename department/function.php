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
function listTable($table){
    $conn=connect();
    $query="SELECT * FROM $table";
    $data=mysqli_query($conn,$query);

    return $data;
}
function addTable($dname,$dnumber,$adres,$email,$phone){
    $conn=connect();
    $query="INSERT INTO department(dName,dNumber,dAddress,dEmail,dPhoneNumber)VALUE('$dname','$dnumber','$adres','$email','$phone')";
    $data=mysqli_query($conn,$query);
}
function deletedepartment($id){
    $conn=connect();
    $query="DELETE FROM department where did = $id";
    $data = mysqli_query($conn,$query);
    header("Location: department.php");
    return $data; 
}
function updatedepartment($id,$departmentName,$departmentNumber,$departmentAddress,$departmentEmail,$departmentPhoneNumber){
    $conn=connect();
    $query="UPDATE department SET dName='$departmentName',dNumber='$departmentNumber',
    dAddress='$departmentAddress',dEmail='$departmentEmail',dPhoneNumber='$departmentAddress' WHERE did='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: department.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT * FROM department WHERE did=$id";
    $data=mysqli_query($conn,$query);
    return $data;
}




?>