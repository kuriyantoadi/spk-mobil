<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Form Login </title>
  <link rel="stylesheet" href="assets/form-login/css/reset.css">
  <link rel="stylesheet" href="assets/form-login/css/style.css" media="screen" type="text/css" />
</head>

<body>

  <div class="wrap">
    <div class="avatar">
      <img src="assets/form-login/assets/user.png">
    </div>
    <form class="" action="cekpasswd.php" method="post">

    <input type="text" name="username" placeholder="username" required>
    <div class="bar">
      <i></i>
    </div>
    <input type="password" name="password" placeholder="password" required>
    <select class="form-control" name="tipe">
      <option value="" selected>- Pilih Level -</option>
      <option value="user">User</option>
      <!--<option value="pemilik">Pemilik Kos</option>-->
      <option value="admin">Administrator</option>
    </select>
    <button type="submit" name="" value="">Login</button>
  </div>
  </form>

  <script src="assets/form-login/js/index.js"></script>

</body>

</html>
