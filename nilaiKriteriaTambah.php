<?php
include 'header.php';
include 'menu.php';
include 'connect.php';
include 'function.php';
?>


<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><center>Tambah Nilai Kriteria</h5>

          <form action="" method="post" enctype="multipart/form-data" id="frm-mhs">

            <div class="form-group">
              <label>Nama Kriteria</label>
              <select class="form-control" name="id_kriteria" required>
                <option value="">Pilih</option>
                <?php s_kriteria() ?>
              </select>
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Nilai</label>
              <select class="form-control" name="nkriteria" required>
                <option value="">Pilih</option>
                <?php s_nilai() ?>
              </select>
            </div>

            <div class="form-group"><center>
              <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
              <a class="btn btn-warning btn-sm" href="alternative.php">Kembali</a>
            </div>
          </form>

          <?php

              $id_kriteria  = $_POST['id_kriteria'];
              $keterangan   = $_POST['keterangan'];
              $nkriteria    = $_POST['nkriteria'];


              if(isset($keterangan,$nkriteria)){
                if((!$keterangan)||(!$nkriteria)){
                print "<script>alert ('Harap semua data diisi...!!');</script>";
                print"<script> self.history.back('Gagal Menyimpan');</script>";
                exit();
                }


              $tambah_data = "INSERT INTO tb_nilai_kriteria value (
              '',
              '$id_kriteria',
              '$keterangan',
              '$nkriteria') ";
              mysql_query($tambah_data, $koneksi);

              echo '
              <script type="text/javascript">

                     alert ("Data Berhasil Ditambah!");

              </script>
              ';
              echo '<meta http-equiv="refresh" content="1; url=nilaiKriteria.php" />';


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
