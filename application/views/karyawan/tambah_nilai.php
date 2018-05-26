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
              <li><a href="<?php echo base_url(); ?>karyawan/input_nilai">Penilaian Karyawan</a></li>
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
                <?php echo form_open('karyawan/insert_nilai'); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama*</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Surat</label>
                      <input type="text" class="form-control" name="tgl" id="tgl_msk" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan*</label>
                      <input type="text" class="form-control" name="jobs" placeholder="Jabatan"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">1. Proaktif/Inisiatif (Dorongan dari dalam diri sendiri, besarnya usaha yang dilakukan yang berhubungan dalam suatu pekerjaan)*</label>
                      <select name="jenis1" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2. Percaya Diri (Keyakinan pada kemampuan diri sendiri untuk menyelesaikan tugas/tantangan/pekerjaannya)*</label>
                      <select name="jenis2" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3. Kedisiplinan (Ketaatan dalam menjalankan tugas pekerjaan sesuai Standar Operasi Prosedure/SOP yang telah diterapkan)*</label>
                      <select name="jenis3" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4. Kesehatan (Kemampuan dalam menjaga stamina tubuh, dari penyakit atau gangguan kesehatan)*</label>
                      <select name="jenis4" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">5. Kemandirian (Kemampuan bekerja secara mandiri tanpa bantuan orang lain)*</label>
                      <select name="jenis5" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">6. Stabilitas Emosi (Kemampuan untuk mengendalikan diri terhadap tindakan negatif saat ada cobaan kususnya menghadapi tantangan atau saat bekerja dalam tekanan)*</label>
                      <select name="jenis6" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">7. Kerjasama (Intensitas dan kesungguhan dalam mendorong kerja kelompok)*</label>
                      <select name="jenis7" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">8. Pengetahuan tugas (Penguasaan bidang pengetahuan yang terkait dengan pekerjaan)*</label>
                      <select name="jenis8" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">9. Akurasi/Ketelitian (Ketepatan dalam melakukan tugas)*</label>
                      <select name="jenis9" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?> 
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">10. Pengambilan Keputusan (Kemampuan dalam memecahkan permasalahan dan mengambil keputusan dengan tepat dan cepat)*</label>
                      <select name="jenis10" class="form-control">
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        foreach ($jenis as $l_surat) {
                          echo "<option  value='$l_surat->jenis_id'>".ucwords($l_surat->jenis_nilai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="hidden" class="form-control" name="jenis" id="jenis_id" value="1"/>
                  </div>

                 <a href="<?php echo base_url(); ?>karyawan/input_nilai" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>