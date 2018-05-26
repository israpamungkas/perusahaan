<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage User
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Manage User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_user" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Khusus</th>
                        <th>Umum</th>
                        <th>Kehadiran</th>
                        <th>Hukuman</th>
                        <th><i>Jumlah Skala</i></th>
                        <th><i>Jumlah Vektor</i></th>
                        <th><i>Bobot</i></th>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->nama)?></td>
                        <td><?php echo ucwords($lihat->khusus)?></td>
                    		<td><?php echo ucwords($lihat->umum)?></td>
                        <td><?php echo ucwords($lihat->kehadiran)?></td>
                        <td><?php echo ucwords($lihat->hukuman)?></td>
                        <td><?php echo ucwords($lihat->jumlah_skala)?></td>
                        <td><?php echo ucwords($lihat->jumlah_vektor)?></td>
                        <td><?php echo ucwords($lihat->bobot)?></td>          		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  <div class="form-group">
                    <h4><label for="exampleInputEmail1"><i>Consistency Indicator (CI)</i></label></h4>
                      <input type="text" class="form-control" readonly="readonly" name="email" />
                     <h5><label for="exampleInputEmail1">Jika Nila CI < 0.1, Maka dapat dikatakan konsisten dan bobot dapat digunakan</label><h5> 
                  </div>
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
