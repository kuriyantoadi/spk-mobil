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
          <h5 class="card-title"><center>Tambah Alternative</h5>

          <form action="" method="post" enctype="multipart/form-data" id="frm-mhs">

            <div class="form-group">
              <label>Nama Alternavie</label>
              <input type="text" class="form-control" name="nama_alternative" />
            </div>

            <div class="form-group"><center>
              <input class="btn btn-primary" type="submit" value="Simpan" />
              <a class="btn btn-warning" href="kriteria.php">Kembali</a>
            </div>
          </form>

          <?php

              $nama_alternative=$_POST['nama_alternative'];

              if(isset($nama_alternative)){
                if(!$nama_alternative){
                print "<script>alert ('Harap semua data diisi...!!');</script>";
                print"<script> self.history.back('Gagal Menyimpan');</script>";
                exit();
                }


              $tambah_alternative="INSERT INTO tb_alternative(nama_alternative) VALUES
              ('$nama_alternative')";
              mysql_query($tambah_alternative,$koneksi);

              echo '
              <script type="text/javascript">

                     alert ("Data Berhasil Ditambah!");

              </script>
              ';
              echo '<meta http-equiv="refresh" content="1; url=alternavie.php" />';


              }

            ?>

        </div>
      </div>
    </div>
  </div>
</div>

</div>
<?php
include 'footer.php';
 ?>
