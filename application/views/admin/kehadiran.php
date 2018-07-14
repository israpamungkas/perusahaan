<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Penilaian Karyawan
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
                  <!--<a href="<?php echo base_url(); ?>admin/tambah_kehadiran" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>-->
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
                        <th>Alpha</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Terlambat</th>
                        <th>Surat Peringatan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->nama)?></td>
                        <td><?php echo ucwords($lihat->alpha)?></td>
                        <td><?php echo ucwords($lihat->izin)?></td>
                        <td><?php echo ucwords($lihat->sakit)?></td>
                        <td><?php echo ucwords($lihat->terlambat)?></td>
                        <td><?php echo ucwords($lihat->sp)?></td>
                        <td align="align left">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_kehadiran/<?php echo $lihat->id_karyawan ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                          </div>
                        </td>                                         		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
