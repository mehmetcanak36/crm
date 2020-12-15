<?php include "function.php";  
$table="customer";
$conn=connect();
$data=listTable($table);
?>


<!doctype html>
<html lang="tr">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    
  </head>
  <body>
  <p style="font-size:30px">Müşteri Bilgileri </p>
<div class="container">
 
 <tr><th> <a href="mainpage.php"> <button type="button" class="btn btn-success ">ANASAYFA</button></th></a></tr>
  <div class="row">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">AD</th>
      <th scope="col">SOYADI</th>
      <th scope="col">ADRES</th>
      <th scope="col">EMAİL</th>
      <th scope="col">yönetici_id</th>
      <th scope="col">kurum_id</th>
      

        <th> <a href="addcustomer.php"> <button type="button" class="btn btn-success ">Yeni müşteri ekle</button></th></a>
        
    </tr>
  </thead>
  <tbody>
<!--  --><?php // var_dump(count($listData)); ?>

<?php 
##if(isset($data)){print_r("data yok");}
foreach($data as $listData) { ?>
    <tr>
      <td><img src="showimage.php?id=" <?php echo $listData['id']; ?> /></td>
      <td><?php echo $listData['cName']; ?></td>
      <td><?php echo $listData['cLastName']; ?></td>
      <td><?php echo $listData['cAddress']; ?></td>
      <td><?php echo $listData['cEmail']; ?></td>
      <td><?php echo $listData['manager_id']; ?></td>
      <td><?php echo $listData['department_id']; ?></td>
      

        <td>
      <a href="imagefile.php?id=<?php echo $listData['id']; ?>" > <button type="submit" class="btn btn-outline-success">dosya ekle</button>
      <a href="updatecustomer.php?id=<?php echo $listData['id']; ?>" > <button type="submit" class="btn btn-success">düzenle</button>
      <a href="delete.php?id=<?php echo $listData['id']; ?>" > <button type="submit" class="btn btn-danger">sil</button>
        </td>
    </tr>
<!--  --><?php } ?>
  </tbody>
  </table>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
  </body>
</html>