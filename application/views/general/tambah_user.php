general<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>User</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>general/jenis_surat">Manage User</a></li>
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
                <h3 class="box-title">Form Data Tambah User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('general/insert_user'); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control" name="Email" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" name="pass" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                      <select name="jenis" class="form-control">
                        <?php  
                        $level = $this->db->query("SELECT * FROM tb_user")->result();
                        foreach ($level as $l_level) {
                          echo "<option  value='$l_level->level'>".ucwords($l_level->level)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>general/manage_user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>