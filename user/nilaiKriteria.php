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
          <h3 class="card-title"><center>Nilai Kriteria</h3>

          <a href="nilaiKriteriaTambah.php" class="btn btn-primary btn-sm">Tambah Kriteria</a>

        <table id="example" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th><center>No.</th>
                    <th><center>Nama kriteria</th>
                    <th><center>Keterangan</th>
                    <th><center>Bobot Nilai</th>
                    <th><center>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql=mysql_query("SELECT * FROM tb_kriteria, tb_nilai_kriteria WHERE tb_kriteria.id_kriteria=tb_nilai_kriteria.id_kriteria");
                $no=1;
                while ($row=mysql_fetch_array($sql)){?>
                  <tr class='td' bgcolor='#FFF'>

                    <td><center><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_kriteria'];?></td>
                    <td><?php echo $row['keterangan'];?></td>
                    <td><center><?php echo $row['nkriteria'];?></td>
                    <td><center>
                        <a class="btn btn-warning btn-sm" href=nilaiKriteriaEdit.php?idk=<?= $row['id_tkriteria'] ?> >Ubah</a>
                        <a href="nilaiKriteriaHapus.php?idk=<?= $row['id_kriteria']; ?>"  class="btn btn-danger btn-sm"
                          onclick="return confirm('Anda yakin Hapus data Kriteria <?= $row['nama_kriteria']; ?> ?')">Hapus</a>

                    </td>
                  </tr>

                </tr>
                <?php }?>

            </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>

</div>


<?php include 'footer.php' ?>
