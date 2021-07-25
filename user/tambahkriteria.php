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
          <h5 class="card-title">Tambah Kriteria</h5>

          <form action="" method="post" enctype="multipart/form-data" id="frm-mhs">

            <div class="form-group">
              <label>Nama Kriteria</label>
              <input type="text" class="form-control" name="nama_kriteria" />
            </div>
            <div class="form-group">
              <label>Atribut</label>
              <select class="form-control" name="atribut">
                <option value="benefit">benefit</option>
                <option value="cost">cost</option>
              </select>
            </div>
            <div class="form-group">
              <label>Nilai Bobot</label>
              <select class="form-control" name="nilai">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

            </div>

            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Simpan" />
              <a class="btn btn-warning" href="kriteria.php">Kembali</a>
            </div>
          </form>

          <?php

              $kode_kriteria=$_POST['kode_kriteria'];
              $nama_kriteria=$_POST['nama_kriteria'];
              $atribut=$_POST['atribut'];
              $nilai=$_POST['nilai'];


              if(isset($nilai,$atribut)){
                if((!$nilai)||(!$atribut)){
                print "<script>alert ('Harap semua data diisi...!!');</script>";
                print"<script> self.history.back('Gagal Menyimpan');</script>";
                exit();
                }


              $add_kelas="INSERT INTO tb_kriteria(atribut,bobot_nilai,nama_kriteria) VALUES
              ('$atribut','$nilai','$nama_kriteria')";
              mysql_query($add_kelas,$koneksi);

              echo '
              <script type="text/javascript">

                     alert ("Data Berhasil Ditambah!");

              </script>
              ';
              echo '<meta http-equiv="refresh" content="1; url=kriteria.php" />';


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
