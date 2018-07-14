<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/input_nilai">Penilaian Karyawan</a></li>
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
                <h3 class="box-title">Form Data Tambah Surat Keluar</h3>
                <h4><small><i>(*) Harap wajib diisi</i></small></h4>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_kehadiran'); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Karyawan*</label>
                     <select name="idkaryawan" class="form-control">
                          <?php   foreach ($karyawan as $item) : ?>
                            <option value="<?php echo $item->id_karyawan?>"><?php echo $item->nama;?></option>
                          <?php   endforeach; ?>
                     </select> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alpha</label>
                      <input type="text" class="form-control" name="alpha" placeholder="alpha"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Izin</label>
                      <input type="text" class="form-control" name="izin" placeholder="izin"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sakit</label>
                      <input type="text" class="form-control" name="sakit" placeholder="sakit"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Terlambat</label>
                      <input type="text" class="form-control" name="terlambat" placeholder="terlambat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Surat Peringatan</label>
                      <input type="text" class="form-control" name="sp" placeholder="Surat Peringatan"/>
                  </div>
                
                  <div class="form-group">
                      <input type="hidden" class="form-control" name="jenis" id="jenis_id" value="1"/>
                  </div>

                 <a href="<?php echo base_url(); ?>admin/kehadiran" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>