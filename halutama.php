<?php
include 'header.php';
include 'menu.php';
?>


<div class="content">

  <div class="row">
    <div class="col-md-12">
      <?php
      if ($_SESSION[status]==admin){ ?>

        <div style="margin-bottom: 250px" class="card">
          <div class="card-header ">
            <h3 style="margin-bottom: 20px; margin-top: 30px" class="card-title">
            <center>Selamat Datang Admin</h3>
          </div>
          <p style="margin-bottom: 50px" align="center">
            Sistem Pendukung Keputusan Pemilihan Mobil Bekas Menggunakan Metode TOPSIS
            <br>Anda login sebagai Admin
          </p>
        </div>


      <?php
      } else if ($_SESSION[status]==pemilik) {

            if ($_SESSION[status] == user){
                $user = 'Pencari Mobil';

                } else if ($_SESSION[status] == pemilik) {
                $user = 'Pemilik Mobil';

                }
        ?>

        <div style="margin-bottom: 250px" class="card">
          <div class="card-header ">
            <h3 style="margin-bottom: 20px; margin-top: 30px" class="card-title">
            <center>Selamat Datang Pemilik Mobil</h3>
          </div>
          <p style="margin-bottom: 50px" align="center">
            Sistem Pendukung Keputusan Pemilihan Mobil Bekas Menggunakan Metode TOPSIS
            <br>Anda login sebagai <b><?= $_SESSION[nama] ?></b>
          </p>
        </div>

        <?php } else if ($_SESSION[status]==user) { ?>

          <div style="margin-bottom: 250px" class="card">
            <div class="card-header ">
              <h3 style="margin-bottom: 20px; margin-top: 30px" class="card-title">
              <center>Selamat Datang Pencari Mobil</h3>
            </div>
            <p style="margin-bottom: 50px" align="center">
              Sistem Pendukung Keputusan Pemilihan Mobil Bekas Menggunakan Metode TOPSIS
              <br>Anda login sebagai <b><?= $_SESSION[nama] ?></b>
            </p>
          </div>

        <?php } ?>

    </div>
  </div>

</div>
<?php
include 'footer.php';
 ?>
