<?php include "function.php";
$table="manager";
$conn = connect();
?>
<!doctype html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <p style="font-size:30px">YENİ YÖNETİCİ EKLEME EKRANI </p>

</head>
<body>
<?php 
?>
<div class="container">

    <form action="add.php" method="post">
        <div class="mb-3">
            <label for="exampleInput1" class="form-label"> Yönetici Adı: </label>
            <input type="text" name="mName" class="form-control" id="example1" aria-describedby="emailHelp" placeholder="Yönetici adi giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput2" class="form-label">Yönetici Soyadı:  </label>
            <input type="text" name="mLastName" class="form-control" id="example2" aria-describedby="emailHelp" placeholder="Yönetici soyadi giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput3" class="form-label">Yönetici Email : :</label>
            <input type="text" name="mEmail" class="form-control" id="example3" placeholder="Yönetici Emaili giriniz : ">
        </div>
        <div class="mb-3">
            <label for="exampleInput4" class="form-label">Yönetici Adresi : </label>
            <input type="text" name="mAddress" class="form-control" id="example4" placeholder="yönetici adresi giriniz: ">
        </div>
        <div class="mb-3">
            <label for="exampleInput4" class="form-label">Yönetici Rolu : </label>
            <input type="text" name="mRole" class="form-control" id="example5" placeholder="yönetici rolu giriniz: ">
        </div>
        
        

        <button type="submit" class="btn btn-primary">YÖNETİCİ EKLE</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>