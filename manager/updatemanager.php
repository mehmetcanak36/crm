<?php 
include "function.php";
#$conn=connect();
$id = $_GET["mid"];

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
        <label for="exampleInput0" class="form-label">yönetici id </label>
        <input type="text" value="<?php echo $d['mid']?>" name="idm" class="form-control" id="exampleInput1"  placeholder="id boş olamaz">
    </div>
    <div class="mb-3">
        <label for="exampleInput1" class="form-label"> yönetici adi giriniz: </label>
        <input type="text" value="<?php echo $d['mName']?>" name="mName" class="form-control" id="exampleInput2"  placeholder="yönetici adi giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput2" class="form-label">yönetici soyadı giriniz : </label>
        <input type="text" value="<?php echo $d['mLastName']?>" name="mLastName" class="form-control" id="exampleInput3" placeholder="yönetici soyadı giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput3" class="form-label">yönetici emaili giriniz : </label>
        <input type="text" value="<?php echo $d['mEmail']?>" name="mEmail" class="form-control" id="exampleInput4" placeholder="yönetici emaili giriniz : " >
    </div>
    <div class="mb-3">
        <label for="exampleInput4" class="form-label">yönetici adresi giriniz :   </label>
        <input type="text" value="<?php echo $d['mAddress']?>" name="mAddress" class="form-control" id="exampleInput5" placeholder="yönetici adresi giriniz: ">
    </div>
    <div class="mb-3">
        <label for="exampleInput5" class="form-label">yönetici rolu giriniz :   </label>
        <input type="text" value="<?php echo $d['mRole']?>" name="mRole" class="form-control" id="exampleInput6" placeholder="yönetici rolu giriniz: ">
    </div>
    
    <button type="submit" class="btn btn-primary">yönetici bilgilerini düzenle</button>
</form>
<?php } ?>
</body>
</html>