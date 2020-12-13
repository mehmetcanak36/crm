<?php include "function.php";
#getinnerjoin();
$conn=connect();
$query="SELECT * 
FROM customer 
INNER JOIN manager ON manager.mid = customer.manager_id 
INNER JOIN department ON department.did = customer.department_id";

$data=mysqli_query($conn,$query);
        
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
  <p style="font-size:20px"></p>
<div class="container">

<tr>
        <th> <a href="customer.php"> <button type="button" class="btn btn-success ">müşteri işlemleri</button></th></a>
        <th> <a href="manager/manager.php"> <button type="button" class="btn btn-success ">yönetici işlemleri</button></th></a>
        <th> <a href="department/department.php"> <button type="button" class="btn btn-success ">kurum işlemleri</button></th></a> </tr>

  <div class="row">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Müşteri id</th>
      <th scope="col">Müşteri Bilgisi</th>
      <th scope="col">Yönetici Bilgisi</th>
      <th scope="col">Kurum Bilgisi </th>
      <th scope="col"></th>

        
    </tr>
  </thead>
  <tbody>

<?php 

foreach($data as $listData) { ?>
    <tr>

      <th scope="row"><?php echo $listData['id']; ?></th>
      <td>müşteri adı     :  <?php echo $listData['cName']; ?><br>
          müşteri soyadı  :  <?php echo $listData['cLastName']; ?>
      </td><br>
      
      <td>yönetici adı     : <?php echo $listData['mName']; ?><br>
          yönetici soyadı  : <?php echo $listData['mLastName']; ?>
      </td><br>

      <td>kurum adı        : <?php echo $listData['dName']; ?><br>
          kurum numarası   : <?php echo $listData['dNumber']; ?>
      </td><br>
      
      

        <td>
      <a href="view/customerview.php?id=<?php echo $listData['id']; ?>" > <button type="submit" class="btn btn-success">göster</button>
      <a href="view/delete.php?id=<?php echo $listData['id']; ?>" > <button type="submit" class="btn btn-danger">sil</button>
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