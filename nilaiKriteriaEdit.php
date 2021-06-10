<?php
include 'header.php';
include 'menu.php';
include("connect.php");


$id_tkriteria=$_GET['idk'];
$show_nilai="SELECT * FROM tb_nilai_kriteria, tb_kriteria WHERE
 tb_kriteria.id_kriteria=tb_nilai_kriteria.id_kriteria id_tkriteria='$id_tkriteria'";
$hasil_nilai=mysql_query($show_nilai,$koneksi);
$view_nilai=mysql_fetch_row($hasil_nilai);

?>


<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Edit Kriteria</h5>


          <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Nama Kriteria</label>
              <select class="form-control" name="id_kriteria" required>
                <option value="">Pilihan Awal | <?php print($view_nilai[1]);?></option>
                <?php s_kriteria() ?>
              </select>
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" value="<?php print($view_nilai[1]);?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Nilai</label>
              <select class="form-control" name="nkriteria" required>
                <option value="">Pilihan Awal | <?= $d['nkriteria'] ?></option>
                <?php s_nilai() ?>
              </select>
            </div>


            <div class="form-group">
              <input class="btn btn-success" type="submit" value="Simpan" />
              <a class="btn btn-warning" href="kriteria.php">Kembali</a>
            </div>
          </form>
          <?php
            $id_kriteria=$_POST['id_kriteria'];
            $nama_kriteria=$_POST['nama_kriteria'];
            $atribut=$_POST['atribut'];
            $nilai=$_POST['nilai'];

            if(isset($nama_kriteria,$atribut,$nilai)){
              if((!$nama_kriteria)||(!$atribut)||(!$nilai)){
              print "<script>alert ('Harap semua data diisi...!!');</script>";
              print"<script> self.history.back('Gagal Menyimpan');</script>";
              exit();
              }

            $add_nilai="UPDATE tb_nilai_kriteria SET
            atribut='$atribut',
            bobot_nilai='$nilai',
            nama_kriteria='$nama_kriteria'
            WHERE id_kriteria='$id_kriteria'";
            mysql_query($add_nilai,$koneksi);

            echo '
            <script type="text/javascript">

                   alert ("Data Berhasil Diubah!");

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
<?php
include 'footer.php';
 ?>
