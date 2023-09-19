

<table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Login terakhir</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php
					$no=1;
					foreach($penggunabaru as $dt){
					?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$dt['nama']?></td>
                    <td><?=$dt['hp']?></td>
                    <td><?=$dt['email']?></td>
                    <td><?=$dt['alamat']?></td>
                    <td><?=date('d/m/Y H:i',strtotime($dt['last_login']))?></td>
                    
                  </tr>
				  <?php
                  $no++;
					}
					?>
                  </tbody>
                </table>