<?php
  $id_user = $_POST['id_user'];
  $user = $_POST['user'];
  $password = $_POST['password'];
  $password_asli = $_POST['password_asli'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $email = $_POST['email'];
  $status = $_POST['status'];



  $add_user="UPDATE login SET
  user='$user',
  password=md5('$password_asli'),
  password_asli='$password_asli',
  nama='$nama',
  alamat='$alamat',
  no_telepon='$no_telepon',
  email='$email',
  status='$status'
  WHERE id_user ='$id_user' ";

  mysql_query($add_user,$koneksi);

  // echo '
  // <script type="text/javascript">
  //   alert ("Data Berhasil Diubah!");
  // </script>
  // ';
  // echo '<meta http-equiv="refresh" content="1; url=user.php" />';
?>
