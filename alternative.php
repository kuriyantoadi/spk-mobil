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
          <h3 class="card-title"><center>Alternative</h3>

          <a href="alternativeTambah.php" class="btn btn-primary btn-sm">Tambah Alternative</a>

        <table id="example" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>No.</th>
                    <th><center>Nama Alternative</th>
                    <th><center>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql=mysql_query("SELECT * FROM tb_alternative ORDER BY nama_alternative DESC");
                $no=1;
                while ($row=mysql_fetch_array($sql)){?>
                  <tr class='td' bgcolor='#FFF'>

                    <td><center><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_alternative'];?></td>
                    <td><center>
                        <a class="btn btn-warning btn-sm" href=alternativeEdit.php?id_alternative=<?= $row['id_alternative'] ?> >Ubah</a>
                        <a href="alternativeHapus.php?id_a=<?= $row['id_alternative']; ?>"  class="btn btn-danger btn-sm"
                          onclick="return confirm('Anda yakin Hapus data alternative <?= $row['nama_alternative']; ?> ?')">Hapus</a>

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
