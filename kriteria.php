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
          <h3 class="card-title"><center>Kriteria</h3>

          <a href="tambahkriteria.php" class="btn btn-primary btn-sm">Tambah Kriteria</a>

        <table id="example" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama kriteria</th>
                    <th>Atribut</th>
                    <th>Bobot Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql=mysql_query("SELECT * FROM kriteria ORDER BY id_kriteria DESC");
                $no=1;
                while ($row=mysql_fetch_array($sql)){?>
                  <tr class='td' bgcolor='#FFF'>

                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_kriteria'];?></td>
                    <td><?php echo $row['atribut'];?></td>
                    <td><?php echo $row['bobot_nilai'];?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href=editkriteria.php?idk=<?= $row['id_kriteria'] ?> >Ubah</a>
                        <a href="deletekriteria.php?idk=<?= $row['id_kriteria']; ?>"  class="btn btn-danger btn-sm"
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
