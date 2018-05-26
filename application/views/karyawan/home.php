
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

<div class="content">
    <div class="row">
        <div class="box">
            <div class="box header">
                <div class="row">
                    <div class="col-md-6">
                        <div id="chart-score" style="width: 900px; height: 500px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart-status" style="width: 900px; height: 500px;"></div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="chart-score-ho" style="width: 550px; height: 350px;"></div>
                    </div>                    
                </div>                     
            </div>    
        </div>
    </div>
</div>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData1 = $.ajax({
            url: "<?php echo base_url().'karyawan/get_score_category';?>",
            dataType: "json",
            async: false
        }).responseText;

        var jsonData2 = $.ajax({
            url: "<?php echo base_url().'karyawan/get_data_status';?>",
            dataType: "json",
            async: false
        }).responseText;

        var jsonData3 = $.ajax({
            url: "<?php echo base_url().'karyawan/get_score_ho';?>",
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

</div><!-- /.content-wrapper -->