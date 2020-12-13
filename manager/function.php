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
function addTable($mname,$mlastname,$memail,$madres,$mrole){
    $conn=connect();
    $query="INSERT INTO manager(mName,mLastName,mEmail,mAddress,mRole)VALUE('$mname','$mlastname','$memail','$madres','$mrole')";
    $data=mysqli_query($conn,$query);
}
function deletemanager($id){
    $conn=connect();
    $query="DELETE FROM manager where mid = $id";
    $data = mysqli_query($conn,$query);
    header("Location: manager.php");
    return $data; 
}
function updatemanager($id,$mName,$mLastName,$mEmail,$mAddress,$mrole){
    $conn=connect();
    $query="UPDATE manager SET mName='$mName',mLastName='$mLastName',
    mEmail='$mEmail',mAddress='$mAddress',mRole='$mrole' WHERE mid='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: department.php");
}

function getData($id){
    $conn=connect();
    $query="SELECT * FROM manager WHERE mid=$id";
    $data=mysqli_query($conn,$query);
    return $data;
}

function control($username,$password){
  $conn=connect();
   $query="SELECT smUserName,smPassword FROM systemmanager WHERE smUserName = '$username' && smPassword ='$password'";
   $data=mysqli_query($conn,$query);
   return $data;
}



?>