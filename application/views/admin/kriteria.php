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
                  	<a href="<?php echo base_url(); ?>admin/edit_nilai_kriteria" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                              <th>Nama Kriteria</th>
                              <th>Skala</th>
                              <th>Bobot</th>  
                            </tr>                            
                          </thead>
                          <tbody>
                            <?php foreach ($kriteria as $item): ?>  
                              <tr>
                                <td><?php echo $item->nama; ?></td>
                                <td><?php echo $item->skala; ?></td>
                                <td><?php echo $item->bobot; ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                    </table><br><br>

                    <?php foreach($kriteria as $item): ?>

                      <h3><strong>Sub kriteria <?php echo $item->nama; ?></strong></h3>
                      <table id="example1" class="table table-bordered table-hover dataTable">
                        <thead>
                          <tr>
                              <th>Nama Sub kriteria</th>
                              <th>Skala</th>
                              <th>Bobot</th>
                              <th>Bobot Hasil</th>
                          </tr>                            
                        </thead>
                        <tbody>
                          <?php foreach ($subkriteria as $item1): ?>
                            <?php if($item1->id_kriteria == $item->id_kriteria): ?>
                                <tr>
                                  <td><?php echo $item1->nama; ?></td>
                                  <td><?php echo $item1->skala; ?></td>
                                  <td><?php echo $item1->bobot; ?></td>
                                  <td><?php echo $item1->bobot_hasil; ?></td>
                                </tr>
                            <?php endif ?>
                          <?php endforeach; ?>
                        </tbody>

                      </table><br><br>
                    <?php endforeach; ?>
                  
                  
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
