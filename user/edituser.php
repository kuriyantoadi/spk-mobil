Pengguna<?php
include 'header.php';
include 'menu.php';
include "connect.php";

$id_user=$_GET['id_user'];
$show_user="SELECT * FROM login WHERE id_user='$id_user'";
$hasil_user=mysql_query($show_user,$koneksi);
$view_user=mysql_fetch_row($hasil_user);

?>

<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><center>Edit Pengguna</h5>


          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Username</label>
              <input type="hidden" class="form-control" name="id_user" value="<?php print($view_user[0]);?>" required/>
              <input type="text" class="form-control" name="user" value="<?php print($view_user[1]);?>" required/>
            </div>
            <div class="form-group">
              <label>Password Enkripsi</label>
              <input type="text" class="form-control" name="password" value="<?php print($view_user[2]);?>" readonly/>
            </div>
            <div class="form-group">
              <label>Password Asli</label>
              <input type="text" class="form-control" name="password_asli" value="<?php print($view_user[3]);?>" required/>
            </div>
            <div class="form-group">
              <label>Nama Pengguna</label>
              <input type="text" class="form-control" name="nama" value="<?php print($view_user[4]);?>" required/>
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php print($view_user[5]);?>" required/>
            </div>

            <div class="form-group">
              <label>No Telepon</label>
              <input type="text" class="form-control" name="no_telepon" value="<?php print($view_user[6]);?>" required/>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php print($view_user[7]);?>" required/>
            </div>

            <div class="form-group">
              <label>Pilih Status</label>
              <select class="form-control" name="status" required>
                <option value="<?php print($view_user[8]);?>" selected> Pilihan Awal ( <?php print($view_user[8]);?> )</option>
                <option value="user">Pencari Kos - User</option>
                <option value="pemilik">Pemilik Kos</option>
                <option value="admin">Administrator</option>
              </select>
            </div>

            <div class="form-group"><center>
              <input class="btn btn-success btn-sm" type="submit" value="Simpan" />
              <a class="btn btn-warning btn-sm" href="user.php">Kembali</a>
            </div>
          </form>

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

            if(isset($nama,$user,$password)){

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

            echo '
            <script type="text/javascript">
              alert ("Data Berhasil Diubah!");
            </script>
            ';
            echo '<meta http-equiv="refresh" content="1; url=user.php" />';
          }
          ?>


        </div>
      </div>
    </div>
  </div>

</div>
<?php
include 'footer.php';
 ?>
