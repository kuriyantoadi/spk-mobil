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
          <h5 class="card-title"><center>Daftar Pengguna</h5>

          <a href="tambahuser.php" class="btn btn-primary btn-sm">Tambah User</a>

          <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama Username</th>
                      <th>Nama Lengkap</th>
                      <th>Status</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $sql=mysql_query("SELECT * FROM login ORDER BY user DESC");
                $no=1;
                while ($row=mysql_fetch_array($sql)){?>
                        <tr>
                          <td><?php echo $no++;?></td>
                          <td><?php echo $row['user'];?></td>
                          <td><?php echo $row['nama'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td>
                            <a class='btn btn-warning btn-sm' href=edituser.php?idk=<?= $row['user'] ?> >Ubah</a>
                            <a href="hapususer.php.php?idk=<?= $row['user']; ?>"  class="btn btn-danger btn-sm"
                              onclick="return confirm('Anda yakin Hapus data User <?= $row['nama']; ?> ?')">Hapus</a>
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
<?php
include 'footer.php';
 ?>
