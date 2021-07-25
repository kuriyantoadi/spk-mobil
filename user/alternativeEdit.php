Pengguna<?php
include 'header.php';
include 'menu.php';
include "connect.php";

$id_mobil=$_GET['id_mobil'];
$show_mobil="SELECT * FROM tb_mobil WHERE id_mobil='$id_mobil'";
$hasil_mobil=mysql_query($show_mobil,$koneksi);
$view_mobil=mysql_fetch_row($hasil_mobil);

?>

<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><center>Edit mobil</h5>


          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>nama mobil</label>
              <input type="hidden" class="form-control" name="id_mobil" value="<?php print($view_mobil[0]);?>" required/>
              <input type="text" class="form-control" name="nama_mobil" value="<?php print($view_mobil[1]);?>" required/>
            </div>

            <div class="form-group"><center>
              <input class="btn btn-success btn-sm" type="submit" value="Simpan" />
              <a class="btn btn-warning btn-sm" href="alternative.php">Kembali</a>
            </div>
          </form>

          <?php
            $id_mobil = $_POST['id_mobil'];
            $nama_mobil = $_POST['nama_mobil'];

            if(isset($nama_mobil)){

            $add_mobil="UPDATE tb_mobil SET
            nama_mobil='$nama_mobil'
            WHERE id_mobil ='$id_mobil' ";
            mysql_query($add_mobil,$koneksi);

            echo '
            <script type="text/javascript">
              alert ("Data Berhasil Diubah!");
            </script>
            ';
            echo '<meta http-equiv="refresh" content="1; url=alternative.php" />';
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
 
