<?php
include 'header.php';
include 'menu.php';
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

        </div>
      </div>
    </div>
  </div>

</div>
<?php
include 'footer.php';
 ?>
