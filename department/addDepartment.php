<?php include "function.php";
$table="department";
$conn = connect();
?>
<!doctype html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <p style="font-size:40px">YENİ KURUM EKLEME EKRANI </p>

</head>
<body>
<?php #include "header.php" 
?>
<div class="container">

    <form action="dataAdd.php" method="post">
        <div class="mb-3">
            <label for="exampleInput1" class="form-label"> kurum adi </label>
            <input type="text" name="dName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kurum adi giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput2" class="form-label">kurum numarası </label>
            <input type="text" name="dNumber" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp" placeholder="kurum numarası giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput3" class="form-label">kurum adresi </label>
            <input type="text" name="dAddress" class="form-control" id="InputAddress1" placeholder="kurum adresi giriniz : ">
        </div>
        <div class="mb-3">
            <label for="exampleInput4" class="form-label">kurum emaili  </label>
            <input type="text" name="dEmail" class="form-control" id="exampleInputEmail1" placeholder="kurum emaili giriniz: ">
        </div>
        <div class="mb-3">
            <label for="exampleInput5" class="form-label">kurum telefonu </label>
            <input type="text" name="dPhoneNumber" class="form-control" id="exampleInputPhoneNumber1" placeholder="kurum telefunu giriniz : ">
        </div>
        

        <button type="submit" class="btn btn-primary">kurum Ekle</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>