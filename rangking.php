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
          <h3 class="card-title">
            <center>TOP RANGKING KOS TERBAIK
          </h3>

          <?php

                                function jml_kriteria(){

                                            $sql = "SELECT * FROM tb_kriteria";
                                            $query = mysql_query($sql);
                                            $count = mysql_num_rows($query);

                                            return $count;

                                        }

                                function get_kriteria(){

                                            $kriteria = mysql_query("SELECT * FROM tb_kriteria");
                                            $i=1;
                                            while ($dataakriteria = mysql_fetch_array($kriteria))
                                            {
                                                $kri[$i] = $dataakriteria['nama_kriteria'];
                                                $i++;
                                            }

                                            return $kri;
                                        }

                                function jml_alternatif(){

                                            $sql = "SELECT * FROM tb_analisa GROUP BY id_mobil";
                                            $query = mysql_query($sql);
                                            $alternatif = mysql_num_rows($query);

                                            return $alternatif;

                                        }

                                function get_alt_name(){

                                            $alternatif = mysql_query("SELECT * FROM tb_mobil");
                                            $i=0;
                                            while ($dataalternatif = mysql_fetch_array($alternatif))
                                            {
                                                $alt[$i] = $dataalternatif['nama_mobil'];
                                                $i++;
                                            }

                                            return $alt;

                                }

                                function get_alternatif(){

                                            $alternatifkriteria = array();

                                            $queryalternatif = mysql_query("SELECT * FROM tb_mobil ORDER BY id_mobil");
                                            $i=0;
                                            while ($dataalternatif = mysql_fetch_array($queryalternatif))
                                            {

                                                $querykriteria = mysql_query("SELECT * FROM tb_kriteria ORDER BY id_kriteria");
                                                $j=0;
                                                while ($datakriteria = mysql_fetch_array($querykriteria))
                                                {
                                                    $queryalternatifkriteria = mysql_query("SELECT * FROM tb_analisa WHERE id_mobil = '$dataalternatif[id_mobil]' AND id_kriteria = '$datakriteria[id_kriteria]'");
                                                    $dataalternatifkriteria = mysql_fetch_array($queryalternatifkriteria);

                                                    $alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilainya'];

                                                    $j++;
                                                }
                                                $i++;
                                            }

                                            return $alternatifkriteria;
                                        }

                                function pembagi(){

                                    $pembagi = array();

                                    for ($i=0;$i<count($kriteria);$i++)
                                    {
                                        $pembagi[$i] = 0;
                                        for ($j=0;$j<count($alternatif);$j++)
                                        {
                                            $pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
                                        }
                                        $pembagi[$i] = sqrt($pembagi[$i]);
                                    }


                                            return $pembagi;
                                }

                                function get_kepentingan(){

                                            $kepentingan = mysql_query("SELECT * FROM tb_kriteria");
                                            $i=0;
                                            while ($datakepentingan = mysql_fetch_array($kepentingan))
                                            {
                                                $kep[$i] = $datakepentingan['bobot_nilai'];
                                                $i++;
                                            }

                                            return $kep;


                                }

                                function get_costbenefit(){

                                            $costbenefit = mysql_query("SELECT * FROM tb_kriteria");
                                            $i=0;
                                            while ($datacostbenefit = mysql_fetch_array($costbenefit))
                                            {
                                                $cb[$i] = $datacostbenefit['atribut'];
                                                $i++;
                                            }

                                            return $cb;


                                }

                                function cmp($a, $b){
                                            if ($a == $b) {
                                                return 0;
                                            }
                                            return ($a > $b) ? -1 : 1;
                                        }

                                        function print_ar(array $x){    //just for print array
                                            echo "<pre>";
                                            print_r($x);
                                            echo "</pre></br>";
                                        }



                                $k = jml_kriteria();

                                $kri = get_kriteria();

                                $a = jml_alternatif();

                                $alt = get_alternatif();

                                $alt_name = get_alt_name();

                                $kep = get_kepentingan();

                                $cb = get_costbenefit();


                                ?>

          <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Rangking</th>
                <th>
                  <center>Nama Mobil
                </th>
                <th>
                  <center>Hasil Nilai Topsis
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class='td' bgcolor='#FFF'>
                <?php

                                        for($i=0;$i<$k;$i++){
                                            $pembagi[$i] = 0;
                                            for($j=0;$j<$a;$j++){
                                                $pembagi[$i] = $pembagi[$i] + pow($alt[$j][$i],2);
                                            }
                                            $pembagi[$i] = round(sqrt($pembagi[$i]),4);

                                        }

                                    ?>

                <?php
                                    for($i=0;$i<$a;$i++){

                                        for($j=0;$j<$k;$j++){
                                            $nor[$i][$j] = round(($alt[$i][$j] / $pembagi[$j]),4);

                                        }

                                    }
                                    ?>

                <?php
                                    for($i=0;$i<$a;$i++){

                                        for($j=0;$j<$k;$j++){
                                            $bob[$i][$j] = round(($nor[$i][$j] * $kep[$j]),4);

                                        }

                                    }
                                    ?>

                <?php

                                    for($i=0;$i<$k;$i++){
                                        for($j=0;$j<$a;$j++){
                                            $temp[$j] = $bob[$j][$i];
                                        }
                                        if($cb[$i]=='benefit')
                                            $aplus[$i] = max($temp);
                                        if($cb[$i]=='cost')
                                            $aplus[$i] = min($temp);

                                    }

                                    ?>

                <?php

                                        for($i=0;$i<$k;$i++){
                                            for($j=0;$j<$a;$j++){
                                                $temp[$j] = $bob[$j][$i];
                                            }
                                            if($cb[$i]=='benefit')
                                                $amin[$i] = min($temp);
                                            if($cb[$i]=='cost')
                                                $amin[$i] = max($temp);

                                        }

                                    ?>

                <?php

                                        for($i=0;$i<$a;$i++){

                                            $dplus[$i] = 0;
                                            for($j=0;$j<$k;$j++){
                                                $dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
                                            }
                                            $dplus[$i] = round(sqrt($dplus[$i]),4);

                                            $dmin[$i] = 0;
                                            for($j=0;$j<$k;$j++){
                                                $dmin[$i] = $dmin[$i] + pow(($amin[$j] - $bob[$i][$j]),2);
                                            }
                                            $dmin[$i] = round(sqrt($dmin[$i]),4);

                                        }

                                    ?>


                <?php



                                for($i=0;$i<$a;$i++){

                                    $v[$i][0] = round(($dmin[$i] / ($dplus[$i]+$dmin[$i])),4);
                                    $v[$i][1] = $alt_name[$i];

                                }


                                usort($v, "cmp");
                                $i = 0;
                                while (list($key, $value) = each($v)) {
                                    $hsl[$i] = array($value[1],$value[0]);
                                    $i++;
                                }
                                // ======================================================================== //
                                echo "<b>Hasil Akhir Analisa Metode Topsis Dengan Nilai bobot preferensi sebagai : W adalah = (5,4,3,3,2,2)</b></br>";
                                echo "Jadi dapat disimpulkan bahwa Alternatif terbaik menggunakan metode topsis adalah <b>".ucwords(($hsl[0][0]))."</b> dengan nilai Metode Topsis <b>".$hsl[0][1]."</b>.<br><br>";
                                for($i=0;$i<$a;$i++){
                                    echo "<tr>
                                    <td>".($i+1).".</td>
                                    <td>".ucwords(($hsl[$i][0]))."</td>
                                    <td>".$hsl[$i][1]."</td>
                                    </tr>";
                                }
                                ?>
              </tr>
              </tr>
              <?php ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php' ?>
