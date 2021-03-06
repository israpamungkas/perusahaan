<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Nilai Kriteria</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Manage User</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Edit Nilai Kriteria</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_user'); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tgl_msk" placeholder="Tanggal Masuk"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jobs</label>
                      <input type="text" class="form-control" name="jobs" placeholder="Jobs"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Office</label>
                      <input type="text" class="form-control" name="office" placeholder="Office"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji</label>
                      <input type="text" class="form-control" name="gaji" placeholder="Gaji"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                      <select name="level" class="form-control">
                        <?php foreach ($options as $option) : ?>
                          <option value="<?php echo $option->id;?>"><?php echo $option->level;?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/manage_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>