<?php 
include "function.php";
#$conn=connect();
$id = $_GET["id"];

#deletedepartment($id);
#header('Location: department.php');
$data=getData($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php foreach ($data as $d){?>
<form action="update.php" method="post">
    <div class="mb-3">
        <label for="exampleInput0" class="form-label">müşteri id </label>
        <input type="text" value="<?php echo $d['id']?>" name="idc" class="form-control" id="exampleInput1" aria-describedby="emailHelp" placeholder="id boş olamaz">
    </div>
    <div class="mb-3">
        <label for="exampleInput1" class="form-label"> müşteri adi giriniz: </label>
        <input type="text" value="<?php echo $d['cName']?>" name="cName" class="form-control" id="exampleInput2" aria-describedby="emailHelp" placeholder="müşteri adi giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput2" class="form-label">müşteri soyadı giriniz : </label>
        <input type="text" value="<?php echo $d['cLastName']?>" name="cLastName" class="form-control" id="exampleInput3" aria-describedby="emailHelp" placeholder="müşteri soyadı giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput3" class="form-label">müşteri adresi giriniz : </label>
        <input type="text" value="<?php echo $d['cEmail']?>" name="cEmail" class="form-control" id="exampleInput4" placeholder="müşteri emaili giriniz : " >
    </div>
    <div class="mb-3">
        <label for="exampleInput4" class="form-label">kurum emaili giriniz :   </label>
        <input type="text" value="<?php echo $d['cAddress']?>" name="cAddress" class="form-control" id="exampleInput5" placeholder="müşteri adresi giriniz: ">
    </div>
    <div class="mb-3">
        <label for="exampleInput4" class="form-label">yönetici id giriniz :   </label>
        <input type="text" value="<?php echo $d['manager_id']?>" name="cAddress" class="form-control" id="exampleInput5" placeholder="müşteri adresi giriniz: ">
    </div>
    <div class="mb-3">
        <label for="exampleInput4" class="form-label">kurum id giriniz :   </label>
        <input type="text" value="<?php echo $d['department_id']?>" name="cAddress" class="form-control" id="exampleInput5" placeholder="müşteri adresi giriniz: ">
    </div>
    <button type="submit" class="btn btn-primary">müşteri bilgilerini düzenle</button>
</form>
<?php } ?>
</body>
</html>