    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
      <form method="post" action="">
        <!-- Small boxes (Stat box) -->
        <div class="col-lg-3 col-6">
        <div class="input-group input-group-sm mb-3">
          <?php $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); ?>
        
                  <select class="form-control" name="filter_bulan">
                    <?php
                  for($c=0; $c<count($bulan); $c+=1){
                    ?> 
                    <option value='<?=($c+1)?>'
                    <?php
                    if(isset($filterbulan)){
                      if($filterbulan==($c+1)){
                        echo "selected";
                      }
                    }else{
                      if(date('m')==($c+1)){
                        echo "selected";
                      }
                    }
                    ?>
                    > <?=$bulan[$c]?> </option>
                  
                  <?php } ?>
                </select>
                  <input type="text" class="form-control" name="filter_tahun" placeholder="tahun" value="<?=isset($filtertahun)?($filtertahun):date('Y')?>">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
  </div>
  
  </form>

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$order?></h3>

                New Order : <?=$order_harian?><br>
                Batal : <?=$order_cancel?>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#pengiriman">Pengiriman Selesai <i class="fas fa-arrow-circle-right"></i></a>
          
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=count($pelanggan)?></h3>

                <p>Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#pelanggan">Pelanggan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=count($penggunabaru)?></h3>

                <p>Pengguna Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#penggunabaru">Pengguna Baru <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp <?=$pendapatan?></h3>

                <p>Pendapatan Hari ini : <?=$pendapatan_harian?></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#pendapatan">Pendapatan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                  Leaderboard
                </h3>
    
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bulan <?=$bulan[(int)date('m')]?></a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <?php 
                  $pod[0]['warna']='#FFD700';
                  $pod[0]['logo']='gold.png';
                  $pod[1]['warna']='#C0C0C0';
                  $pod[1]['logo']='silver.png';
                  $pod[2]['warna']='#CD7F32';
                  $pod[2]['logo']='bronze.png';
                  
                  for($i=0;$i<count($podium);$i++){ ?>
<div class="info-box mb-3" style="background-color:<?=$pod[$i]['warna']?>">
              <span class="info-box-icon" style="background-color:white;">
              <img src="<?=base_url('assets/'.$pod[$i]['logo'])?>" width="50%"></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>[Lv.<?=$podium[$i]['level']?>]</b> <?=$podium[$i]['nama']?> <b>(<?=$podium[$i]['poin']?> Poin)</b></span>
                <!-- <span class="info-box-number">
              </span> -->
              <div class="row container">
              <div class="col-6-md">
              <a target="_blank" class="btn btn-success btn-sm" href='https://wa.me/<?=filterhp($podium[$i]['hp'])?>'><i class="fa fa-whatsapp"></i> <?=filterhp($podium[$i]['hp'])?></a>
                  </div>
                  
              <div class="col-6-md">
              <a target="_blank" class="btn btn-primary btn-sm" href="https://mail.google.com/mail/?view=cm&fs=1&to=<?=$podium[$i]['email']?>&su=SUBJECT&body=BODY"><i class="fa fa-envelope"></i> <?=$podium[$i]['email']?></a>
                </div>
              </div>
              <?=$podium[$i]['alamat']?>
              </div>
              <!-- /.info-box-content -->
            </div>

            <?php } ?>
            


                    <!-- <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                  <div id="penjualan-harian" style="height: 250px;"></div>
                   </div> -->

                  </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->



          </section>
          
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Pendapatan
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#pendapatanharian-chart" data-toggle="tab">Tahun <?=isset($filtertahun)?($filtertahun):date('Y')?></a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                    <div class="chart tab-pane active" id="pendapatanharian-chart"
                       style="position: relative; height: 300px;">
                  <div id="pendapatan-harian" style="height: 250px;"></div>
                   </div>

                  </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->



          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="pengiriman">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pengiriman</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php $this->load->view('admin/tabel/tabel_allorder');?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
    <div class="modal fade" id="pelanggan">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pelanggan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php $this->load->view('admin/tabel/tabel_pelanggan');?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
      <div class="modal fade" id="penggunabaru">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pengguna Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php $this->load->view('admin/tabel/tabel_penggunabaru');?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
      <div class="modal fade" id="pendapatan">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Income</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php $this->load->view('admin/tabel/tabel_pendapatan');?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <?php
$datatrafik = '';
$datapendapatan = '';

for($c=0; $c<count($bulan); $c+=1){
  if(isset($trafikdone[($c+1)])){
    $jml=$trafikdone[($c+1)];
  }else{
    $jml=0;
  }
  if(isset($trafikcancel[($c+1)])){
    $jmlc=$trafikcancel[($c+1)];
  }else{
    $jmlc=0;
  }
  if(isset($grafikpendapatan[($c+1)])){
    $jmlp=$grafikpendapatan[($c+1)];
  }else{
    $jmlp=0;
  }
  $datatrafik.="{nmbulan:'".$bulan[$c]."',jml:'".$jml."',cancel:'".$jmlc."'},";
  $datapendapatan.="{period:'".$bulan[$c]."',pendapatan:'".$jmlp."'},";

}

$datatrafik =rtrim($datatrafik, ',');
    ?>
    
<!-- morris -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
  $(document).ready(function () {
  //   Morris.Bar({
  //       element: 'penjualan-harian',
  //       data: [<?php echo $datatrafik; ?>],
  //       barColors: ['blue','red'],
  //       xkey: 'nmbulan',
  //       ykeys: ['jml','cancel'],
  //       labels: ['Pengiriman','Batal'],
  // xLabelAngle: 45,
  //   });


      Morris.Line({
  element: 'pendapatan-harian',
  data: [<?php echo $datapendapatan; ?>],
  lineColors: ['#fc8710'],
  xkey: 'period',
  ykeys: ['pendapatan'],
  labels: ['Pendapatan'],
  xLabelAngle: 45,
  parseTime:false,
  resize: true
});

//     Morris.Line({
//   element: 'pendapatan-harian',
//   data: [
//     { period: '2016-05-10', pendapatan: 200000},
//     { period: '2016-05-11', pendapatan: 15000},
//     { period: '2016-05-12', pendapatan: 80000},
//     { period: '2016-05-13', pendapatan: 10000},
//     { period: '2016-05-14', pendapatan: 50000},
//     { period: '2016-05-15', pendapatan: 75000},
//     { period: '2016-05-16', pendapatan: 175000},
//     { period: '2016-05-17', pendapatan: 150000},
//     { period: '2016-05-18', pendapatan: 12000},
//     { period: '2016-05-19', pendapatan: 60000},
//     { period: '2016-05-20', pendapatan: 100000}
//   ],
//   lineColors: ['#fc8710'],
//   xkey: 'period',
//   ykeys: ['pendapatan'],
//   labels: ['Pendapatan'],
//   xLabels: 'day',
//   xLabelAngle: 45,
//   xLabelFormat: function (d) {
//     var weekdays = new Array(7);
//     weekdays[0] = "SUN";
//     weekdays[1] = "MON";
//     weekdays[2] = "TUE";
//     weekdays[3] = "WED";
//     weekdays[4] = "THU";
//     weekdays[5] = "FRI";
//     weekdays[6] = "SAT";

//     return weekdays[d.getDay()] + '-' + 
//            ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
//            ("0" + (d.getDate())).slice(-2);
//   },
//   resize: true
// });
});
    </script>