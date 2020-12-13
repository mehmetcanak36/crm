
<!doctype html>
<html lang="tr">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    
  </head>
  <body>
  <p style="font-size:30px">ayrıntılar</p>
<div class="container">


<tr><th> <a href="../mainpage.php"> <button type="button" class="btn btn-success ">ANASAYFA</button></th></a></tr>

</div>
<?php include "function.php";

$id=$_GET['id'];
$table1="customer";
$table2="manager";
$table3="department";
$datacustomer=getcustomer($id);
//print_r($datacustomer);
foreach($datacustomer as $d){
    //print_r($d);
    //echo $d['cName'];
    $managerid=$d['manager_id'];
    //echo $managerid;
}
$datamanager=getmanager($managerid);
//print_r($datamanager);
#print_r( $datamanager);
foreach($datacustomer as $d){
    #echo $d['cName'];
    $departmentid=$d['department_id'];
    #echo $departmentid;
}
$datadepartment=getdepartment($departmentid);
#print_r($datadepartment);

?>

<?php 
foreach($datacustomer as $listData) { ?>
    <tr>
      <th scope="row">Müşteri id : <?php echo $listData['id']; ?></th><br>
      <td>müşteri adı     :  <?php echo $listData['cName']; ?></td><br>
      <td>müşteri soyadı  :  <?php echo $listData['cLastName']; ?></td><br>
      <td>müşteri adresi  :  <?php echo $listData['cAddress']; ?></td><br>
      <td>müşteri email   :  <?php echo $listData['cEmail']; ?></td><br>
      <td>müşteri yönetici id: <?php echo $listData['manager_id']; ?></td><br>
      <td>müşteri kurum id : <?php echo $listData['department_id']; ?></td><br><br>
    </tr>
<?php } ?>

<?php 

foreach($datamanager as $listData) { ?>
    <tr>
      <th scope="row">yönetici id :<?php echo $listData['mid']; ?></th><br>
      <td>yönetici adı     : <?php echo $listData['mName']; ?></td><br>
      <td>yönetici soyadı  : <?php echo $listData['mLastName']; ?></td><br>
      <td>yönetici adresi  : <?php echo $listData['mAddress']; ?></td><br>
      <td>yönetici email   : <?php echo $listData['mEmail']; ?></td><br>
      <td>yönetici rolu    : <?php echo $listData['mRole']; ?></td><br><br>
    </tr>
<?php } ?>

<?php 

foreach($datadepartment as $listData) { ?>
    <tr>
      <th scope="row">kurum id :<?php echo $listData['did']; ?></th><br>
      <td>kurum adı     : <?php echo $listData['dName']; ?></td><br>
      <td>kurum numarası: <?php echo $listData['dNumber']; ?></td><br>
      <td>kurum adresi  : <?php echo $listData['dAddress']; ?></td><br>
      <td>kurum telefon : <?php echo $listData['dPhoneNumber']; ?></td><br>
      <td>kurum email   : <?php echo $listData['dEmail']; ?></td><br>
    </tr>
<?php } ?> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
  </body>
</html>

