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
                  <a href="<?php echo base_url(); ?>general/tambah_nilai" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>Gaji</th>
                        <th>Masuk</th>
                        <th>Jatuh Tempo</th>
                        <th>Sisa Hari</th>
                        <th>Jabatan</th>
                        <th>Jumlah Nilai</th>
                        <th>Last Edit</th>
                        <th>Status</th>
                        <th>Ket</th>
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
                        <td>Rp.<?php echo number_format($lihat->gaji,0,',',',')?>,-</td>
                        <td><?php echo tgl_indo($lihat->tgl_msk)?></td>
                        <td><i><?php echo tgl_indo($lihat->jatuh_tempo)?></i></td>
                        <td><i><?php if ($lihat->selisih <0) {echo "0";}else{echo ucwords($lihat-> selisih.' hari');}?></i></td>
                        <td><i><?php echo ucwords($lihat->jobs)?></i></td>
                        <td><?php echo ucwords($lihat->jml_id)?></td>
                        <td><?php echo tgl_indo(date('Y-m-d', strtotime($lihat->dateinput)));?></td>
                        <td align="center">
                        <a class="btn btn-sm btn-primary" style="background-color: black;"> <?php echo ucwords($lihat->jenis_surat)?>
                        </a>
                        </td>
                        <td><?php echo ucwords($lihat->ket)?></td>
                        <td align="center">
                          <div class="btn-group" role="group">
                            <?php if($lihat->selisih > 0): ?>
                            <a href="<?php echo base_url(); ?>admin/edit_nilai/<?php echo $lihat->id_karyawan ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                          <?php endif; ?>
                            <a href="<?php echo base_url(); ?>admin/hapus_nilai/<?php echo $lihat->id_karyawan ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
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
