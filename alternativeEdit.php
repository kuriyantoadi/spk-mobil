Pengguna<?php
include 'header.php';
include 'menu.php';
include "connect.php";

$id_alternative=$_GET['id_alternative'];
$show_alternative="SELECT * FROM tb_alternative WHERE id_alternative='$id_alternative'";
$hasil_alternative=mysql_query($show_alternative,$koneksi);
$view_alternative=mysql_fetch_row($hasil_alternative);

?>

<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title"><center>Edit Alternative</h5>


          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>nama Alternative</label>
              <input type="hidden" class="form-control" name="id_alternative" value="<?php print($view_alternative[0]);?>" required/>
              <input type="text" class="form-control" name="nama_alternative" value="<?php print($view_alternative[1]);?>" required/>
            </div>

            <div class="form-group"><center>
              <input class="btn btn-success btn-sm" type="submit" value="Simpan" />
              <a class="btn btn-warning btn-sm" href="alternative.php">Kembali</a>
            </div>
          </form>

          <?php
            $id_alternative = $_POST['id_alternative'];
            $nama_alternative = $_POST['nama_alternative'];

            if(isset($nama_alternative)){

            $add_alternative="UPDATE tb_alternative SET
            nama_alternative='$nama_alternative'
            WHERE id_alternative ='$id_alternative' ";
            mysql_query($add_alternative,$koneksi);

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
