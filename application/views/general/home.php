<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
            <h3>
            <center><i>Selamat Datang di Sistem Infirmasi Penilaian Kinerja Karyawan PT. ALTIMA MANDIRI</i></center>
          </h3>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <h3>1</h3>
                  <p>Manage User</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?php echo base_url(); ?>general/manage_user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
           
            <!--<div class="col-lg-3 col-xs-6">-->
              <!-- small box -->
              <!--<div class="small-box bg-aqua">
                <div class="inner">
                  <h3>2</h3>
                  <p>Key Performance</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/surat_keluar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div> -->
            <!--</div>--><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-lime">
                <div class="inner">
                  <h3>2</h3>
                  <p>Input Nilai</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo base_url(); ?>general/input_nilai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>2</h3>
                  <p>Assessment Report</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>general/jenis_surat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon-active">
                <div class="inner">
                  <h3>4</h3>
                  <p>Value</p>
                </div>
                <div class="icon">
                  <i class="fa fa-twitch"></i>
                </div>
                <a href="<?php echo base_url(); ?>general/himpunan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          
          <div class="row">
                <div class="col-md-6">

                    <div id="chart-score" style="width: 700px; height: 400px;"></div>
                </div>
                
                <div class="col-md-6">
                    <div id="chart-status" style="width: 700px; height: 400px;"></div>
          </div>                    
          
          <div class="row">
                    <div class="col-md-6">
                        <div id="chart-score-ho" style="width: 450px; height: 250px;"></div>
                    </div>                    
          </div>  

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData1 = $.ajax({
            url: "<?php echo base_url().'general/get_score_category';?>",
            dataType: "json",
            async: false
        }).responseText;

        var jsonData2 = $.ajax({
            url: "<?php echo base_url().'general/get_data_status';?>",
            dataType: "json",
            async: false
        }).responseText;

        var jsonData3 = $.ajax({
            url: "<?php echo base_url().'general/get_score_ho';?>",
            dataType: "json",
            async: false
        }).responseText;

        var data1 = new google.visualization.DataTable(jsonData1); 
        var data2 = new google.visualization.DataTable(jsonData2); 
        var data3 = new google.visualization.DataTable(jsonData3); 

        var options1 = {
          title: 'Grafik nilai seluruh karyawan Altima Mandiri'
        };

        var options2 = {
          title: 'Status nilai karyawan Altima '
        };

        var options3 = {
          title: 'Grafik nilai karyawan Head Office Altima '
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('chart-score'));
        var chart2 = new google.visualization.PieChart(document.getElementById('chart-status'));
        var chart3 = new google.visualization.PieChart(document.getElementById('chart-score-ho'));

        chart1.draw(data1, options1);
        chart2.draw(data2, options2);
        chart3.draw(data3, options3);
      }
    </script>
          <!--<p><center><img src="<?php echo base_url(); ?>assets/dist/img/altima.jpg" style="width: 960px; height: 249px;"/></center></p>-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
