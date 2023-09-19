

<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Poin</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Jumlah Pesanan</th>
                    <th>Lencana</th>
                    <th>Login terakhir</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php
					$no=1;
					foreach($pelanggan as $dt){
					?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$dt['level']>0?floor($dt['level']):"0"?></td>
                    <td><?=$dt['level']>0?$dt['poin']:"0"?></td>
                    <td><?=$dt['nama']?></td>
                    <td><?=$dt['hp']?></td>
                    <td><?=$dt['email']?></td>
                    <td><?=$dt['alamat']?></td>
                    <td><?php
                    $totorder=count($this->gmodel->getData('pemesanan',array('id_client'=>$dt['id_cl'],'status'=>'done')));
                    echo $totorder;
                    ?></td>
					<td><?php
					if($totorder>0&&$no==1){
						echo '<img width="20" src="'.base_url('assets/gold.png').'">';
					}else if($totorder>0&&$no==2){
						echo '<img width="20" src="'.base_url('assets/silver.png').'">';
					}else if($totorder>0&&$no==3){
						echo '<img width="20" src="'.base_url('assets/bronze.png').'">';
					}
					$no++;
					?>
					</td>
                    <td><?=date('d/m/Y H:i',strtotime($dt['last_login']))?></td>
                  </tr>
				  <?php
					}
					?>
                  </tbody>
                </table>