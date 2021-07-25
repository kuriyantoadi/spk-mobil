<?php
include 'header.php';
include 'menu.php';
include 'connect.php';
?>

    <?php
    
    $idk=$_GET['idk'];
    $show_kelas="SELECT * FROM tb_nilai_kriteria WHERE id_tkriteria='$idk'";
    $hasil_kelas=mysql_query($show_kelas,$koneksi);
    $view_kelas=mysql_fetch_row($hasil_kelas);

    ?>
<div class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Edit Nilai Kriteria</h5>

          <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label>Id Kriteria</label>
                                <input readonly type="text" class="form-control" name="id_kriteria" value="<?php print($view_kelas[0]);?>"/>
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
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="<?php print($view_kelas[2]);?>"/>
                              </div>
                              
                              <div class="form-group">
                                <label>Nilai</label>
                                <select class="form-control" name="nilai">
                                              <?php
                                              if ($view_kelas[3]=='1'){
                                                echo '
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                ';
                                              } else if ($view_kelas[3]=='2') {

                                                echo '
                                                <option value="1">1</option>
                                                <option value="2" selected>2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                ';

                                              } else if ($view_kelas[3]=='3') {

                                                echo '
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected>3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                ';

                                              } else if ($view_kelas[3]=='4') {

                                                echo '
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected>4</option>
                                                <option value="5">5</option>
                                                ';

                                              } else {
                                                echo '
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected>5</option>
                                                ';
                                              }
                                              ?>
                                                
                                            </select>
                                
                                </select>
                                
                              </div>
                              
                              
                              <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Simpan" />
                                <a class="btn btn-warning" href="nilaiKriteria.php">Kembali</a>
                              </div>
                              
                            </form>

                            <?php
                                      

                                      $id_kriteria=$_POST['id_kriteria'];
                                      $kriteria=$_POST['kriteria'];
                                      $keterangan=$_POST['keterangan'];
                                      $nilai=$_POST['nilai'];


                                      if(isset($keterangan,$kriteria,$nilai)){
                                        if((!$keterangan)||(!$kriteria)||(!$nilai)){
                                        print "<script>alert ('Harap semua data diisi...!!');</script>";
                                        print"<script> self.history.back('Gagal Menyimpan');</script>"; 
                                        exit();
                                        } 

                                      $add_kelas="UPDATE tb_nilai_kriteria SET id_kriteria='$kriteria',keterangan='$keterangan',nkriteria='$nilai'
                                      WHERE id_tkriteria='$id_kriteria'";
                                      mysql_query($add_kelas,$koneksi);

                                      echo '
                                      <script type="text/javascript">
                                       
                                             alert ("Data Berhasil Diubah!");
                                             
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
 