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
          <h5 class="card-title">Tambah Nilai Alternative</h5>

          <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                              <label>Nama Mobil</label>
                                <select class="form-control" name="nama_mobil">
                                <?php

                                $tampil=mysql_query("SELECT * FROM tb_mobil ORDER BY id_mobil");
                                while($w=mysql_fetch_array($tampil)){
                                  if ($view_kelas[2]==$w[id_mobil]){
                                    echo "<option value=$w[id_pmobil] selected>$w[nama_mobil]</option>";
                                  }
                                  else{
                                    echo "<option value=$w[id_mobil]>$w[nama_mobil]</option>";
                                  }
                                }


                                ?>
                                </select>

                              </div>
                              <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select class="form-control" name="kriteria">
                                <?php

                                $tampil=mysql_query("SELECT * FROM tb_kriteria ORDER BY id_kriteria");
                                while($w=mysql_fetch_array($tampil)){
                                  if ($view_kelas[1]==$w[id_kriteria]){
                                    echo "<option value=$w[id_kriteria] selected>$w[nama_kriteria]</option>";
                                  }
                                  else{
                                    echo "<option value=$w[id_kriteria]>$w[nama_kriteria]</option>";
                                  }
                                }


                                ?>
                                </select>

                              </div>
                              
                              <div class="form-group">
              <label>Nilainya</label>
              <select class="form-control" name="nilai">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

            </div>
                              
                              
                              <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Simpan" />
                                <a class="btn btn-warning" href="analisa.php">Kembali</a>
                              </div>
                              
                            </form>



                              <?php
                                      

                                      $kriteria=$_POST['kriteria'];
                                      $nama_mobil=$_POST['nama_mobil'];
                                      $nilai=$_POST['nilai'];
                                      

                                      if(isset($nilai,$kriteria)){
                                        if((!$nilai)||(!$kriteria)){
                                        print "<script>alert ('Harap semua data diisi...!!');</script>";
                                        print"<script> self.history.back('Gagal Menyimpan');</script>"; 
                                        exit();
                                        } 

                                     
                                      $add_kelas="INSERT INTO tb_analisa (id_kriteria,id_mobil,nilainya) VALUES 
                                      ('$kriteria','$nama_mobil','$nilai')";
                                      mysql_query($add_kelas,$koneksi);

                                      echo '
                                      <script type="text/javascript">
                                       
                                             alert ("Data Berhasil Ditambah!");
                                             
                                      </script>
                                      ';
                                      echo '<meta http-equiv="refresh" content="1; url=analisa.php" />';


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
 