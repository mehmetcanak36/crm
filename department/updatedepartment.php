<?php 
include "function.php";
#$conn=connect();
$id = $_GET["did"];

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
        <label for="exampleInput0" class="form-label"> kurum id </label>
        <input type="text" value="<?php echo $d['did']?>" name="id1" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="id :">
    </div>
    <div class="mb-3">
        <label for="exampleInput1" class="form-label"> kurum adi giriniz: </label>
        <input type="text" value="<?php echo $d['dName']?>" name="dName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kurum adi giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput2" class="form-label">kurum numarası giriniz : </label>
        <input type="text" value="<?php echo $d['dNumber']?>" name="dNumber" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp" placeholder="kurum numarası giriniz :">
    </div>
    <div class="mb-3">
        <label for="exampleInput3" class="form-label">kurum adresi giriniz : </label>
        <input type="text" value="<?php echo $d['dAddress']?>" name="dAddress" class="form-control" id="InputAddress1" placeholder="kurum adresi giriniz : " >
    </div>
    <div class="mb-3">
        <label for="exampleInput4" class="form-label">kurum emaili giriniz :   </label>
        <input type="text" value="<?php echo $d['dEmail']?>" name="dEmail" class="form-control" id="exampleInputEmail3" placeholder="kurum emaili giriniz: ">
    </div>
    <div class="mb-3">
        <label for="exampleInput5" class="form-label">kurum telefonu </label>
        <input type="text" value="<?php echo $d['dPhoneNumber'] ?>" name="dPhoneNumber" class="form-control" id="exampleInputPhoneNumber1" placeholder="kurum telefunu giriniz : ">
    </div>
    

    <button type="submit" class="btn btn-primary">kurumu düzenle</button>
</form>
<?php } ?>
</body>
</html>