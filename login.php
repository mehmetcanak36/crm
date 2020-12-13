<?php include "function.php";
$table="user";
$conn = connect();
#$data = listView("user");
?>
<!doctype html>
<html lang="tr">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <p style="font-size:40px">Giriş Sayfası </p>
  </head>
  <body>

  <form action="control.php" method="post">
  <div class="form-group">
    <label for="exampleInputUserName1" class="form-label">kullanıcı adini giriniz :</label>
    <input type="text" name="username" class="form-control" id="exampleInputUserNmae" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">şifresyi giriniz :</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">giriş yap</button>
</form>
  
</body>
</html>