<?php include "function.php";
$tablem="manager";
$tabled="department";
$datam=getdata($tablem);
$datad=getdata($tabled);

?>
<!doctype html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <p style="font-size:40px">YENİ MÜŞTERİ EKLEME EKRANI </p>

</head>
<body>
<?php 
?>
<div class="container">

    <form action="add.php" method="post">
        <div class="mb-3">
            <label for="exampleInput1" class="form-label"> Müşteri Adı: </label>
            <input type="text" name="cName" class="form-control" id="example1" aria-describedby="emailHelp" placeholder="Müşteri adi giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput2" class="form-label">Müşteri Soyadı:  </label>
            <input type="text" name="cLastName" class="form-control" id="example2" aria-describedby="emailHelp" placeholder="Müşteri soyadi giriniz :">
        </div>
        <div class="mb-3">
            <label for="exampleInput3" class="form-label">Müşteri Email : :</label>
            <input type="text" name="cEmail" class="form-control" id="example3" placeholder="Müşteri Emaili giriniz : ">
        </div>
        <div class="mb-3">
            <label for="exampleInput4" class="form-label">Müşteri Adresi : </label>
            <input type="text" name="cAddress" class="form-control" id="example4" placeholder="müşteri adresi giriniz: ">
        </div>
        <?php foreach ($datam as $d){ ?>
        <select class="form-control form-control-lg">
           
             <option value="<?php echo $d['dName']?>"><?php echo $d['dName']?></option> <?php }?>
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">MÜŞTERİ EKLE</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>