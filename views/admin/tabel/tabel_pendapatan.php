

<?php $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); ?>





<table id="example4" class="table table-bordered table-striped">

                  <thead>

                  <tr>

                    <th>No</th>

                    <th>Bulan</th>

                    <th>Tahun</th>

                    <th>Pendapatan</th>

                  </tr>

                  </thead>

                  <tbody>

					<?php

					$no=1;

					foreach($pendapatanall as $dt){

					?>

                  <tr>

                    <td><?=$no?></td>

                    <td><?=$bulan[($dt['bln']-1)]?></td>

                    <td><?=$dt['thn']?></td>

                    <td><?=$dt['biaya']?></td>

                    

                  </tr>

				  <?php

                  $no++;

					}

					?>

                  </tbody>

</table>