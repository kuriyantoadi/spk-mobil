<?php

function s_nilai(){
for ($i=1; $i <= 5; $i++) {
  // echo $i;
  ?>

<option value="<?= $i; ?>"><?= $i ?></option>

  <?php
  }
}

function s_kriteria(){
  include 'connect.php';
  $sql=mysql_query("SELECT * FROM tb_kriteria ORDER BY id_kriteria DESC");
  while ($d = mysql_fetch_array($sql)){ ?>

    <option value="<?= $d['id_kriteria'] ?>"><?= $d['nama_kriteria'] ?></option>

<?php
  }
}


 ?>
