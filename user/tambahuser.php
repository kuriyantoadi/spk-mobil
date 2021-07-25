<?php
include 'header.php';
include 'menu.php';
include 'connect.php';
?>


<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><center>Tambah Pengguna</h5>

          <form action="" method="post">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name='nama' required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="5" cols="50" required></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="telepon" value="" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="" required>
                </div>

                <div class="form-group">
                  <label>Pilih Level</label>
                  <select class="form-control" name="tipe">
                    <option value="0" selected>- Pilih -</option>
                    <option value="user">Pencari Kos</option>
                    <option value="pemilik">Pemilik Kos</option>
                    <option value="admin">Administrator</option>
                  </select>
                </div>


                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="" required>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" value="" required>
                </div>

                <div class="form-group"><center>
                  <input id="btn-fblogin" class="btn btn-primary btn-sm" type="submit" value="Tambah Pengguna" />
                  <a class="btn btn-warning btn-sm" href="user.php">Kembali</a>
                </div>
              </div>
            </div>
            </div>
          </form>

          <?php

            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $telepon=$_POST['telepon'];
            $email=$_POST['email'];
            $tipe=$_POST['tipe'];
            $username=$_POST['username'];
            $password=$_POST['password'];

            if(isset($nama,$telepon)){
              if((!$nama)||(!$telepon)){
              print "<script>alert ('Harap semua data diisi...!!');</script>";
              print"<script> self.history.back('Gagal Menyimpan');</script>";
              exit();
              }

            $add_kelas="INSERT INTO login(
              nama,
              alamat,
              no_telepon,
              email,
              status,
              user,
              password_asli,
              password) VALUES
            ('$nama',
              '$alamat',
              '$telepon',
              '$email',
              '$tipe',
              '$username',
              '$password',
              md5('$password'))";
            mysql_query($add_kelas,$koneksi);

            echo '
            <script type="text/javascript">
              alert ("Data Berhasil Ditambah!");
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
