<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>User</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/input_nilai">Manage User</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Data Edit User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_nilai'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->nama ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masuk</label>
                      <input type="text" readonly="readonly" class="form-control" name="tgl" id="tgl_msk" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_msk ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                      <input type="text" readonly="readonly" class="form-control" name="jobs" value="<?php echo $data->jobs ?>" />
                  </div>
                  <div class="box-header with-border">
                  </div>
                 <h5 class="box-title"><b>I . KOMPETENSI UMUM<b></h5>
                <div class="box-header with-border">
                <div class="form-group">
                    <label for="exampleInputEmail1">1 . Proaktif/Inisiatif (Dorongan dari dalam diri sendiri, besarnya usaha yang dilakukan yang berhubungan dalam suatu pekerjaan)</label>
                      <select name="jenis1" class="form-control">
                        <?php
                        $jenis1 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis1)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis1 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id1 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">2 . Percaya Diri (Keyakinan pada kemampuan diri sendiri untuk menyelesaikan tugas/tantangan/pekerjaannya)</label>
                      <select name="jenis2" class="form-control">
                        <?php
                        $jenis2 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis2)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis2 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id2 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">3 . Kedisiplinan (Ketaatan dalam menjalankan tugas pekerjaan sesuai Standar Operasi Prosedure/SOP yang telah diterapkan)</label>
                      <select name="jenis3" class="form-control">
                        <?php
                        $jenis3 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis3)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis3 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id3 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">4 . Kemandirian (Kemampuan bekerja secara mandiri tanpa bantuan orang lain)</label>
                      <select name="jenis4" class="form-control">
                        <?php
                        $jenis4 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis4)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis4 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id4 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">5 . Stabilitas Emosi (Kemampuan untuk mengendalikan diri terhadap tindakan negatif saat ada cobaan, kususnya menghadapi tantangan atau saat bekerja dalam tekanan)</label>
                      <select name="jenis5" class="form-control">
                        <?php
                        $jenis5 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis5)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis5 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id5 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">6 . Kerjasama/team work  (Intensitas dan kesungguhan dalam mendorong kerja kelompok)</label>
                      <select name="jenis6" class="form-control">
                        <?php
                        $jenis6 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis6)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis6 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id6 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                </div>
                <h5 class="box-title"><b>II . KOMPETENSI KHUSUS DALAM PELAKSANAAN TUGAS<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Pengetahuan/teknis (Penguasaan bidang pengetahuan yang terkait dengan pekerjaan untuk menggunakan, mengembangkan dan membagikan kepada orang lain)</label>
                      <select name="jenis7" class="form-control">
                        <?php
                        $jenis7 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis7)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis7 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id7 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Akurasi/ketelitian (Ketepatan dalam melakukan tugas)</label>
                      <select name="jenis8" class="form-control">
                        <?php
                        $jenis8 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis8)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis8 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id8 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 . Pengambilan keputusan (Kemampuan dalam memecahkan permasalahan dan mengambil keputusan dengan tepat dan cepat)</label>
                      <select name="jenis9" class="form-control">
                        <?php
                        $jenis9 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis9)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis9 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id9 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 . Tanggung jawab (Kemampuan dalam menanggung resiko akan pekerjaannya)</label>
                      <select name="jenis10" class="form-control">
                        <?php
                        $jenis10 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis10)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis10 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id10 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">5 . Hasil pekerjaan (Kualitas kerja & Kuantitas pekerjaan yang dilakukan apakah sesuai standar yang telah ditetapkan)</label>
                      <select name="jenis11" class="form-control">
                        <?php
                        $jenis11 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis11)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis11 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id11 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                </div>

                 <h5 class="box-title"><b>III . CATATAN KEHADIRAN<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Alpha = [ <?php echo $data->alpha ?> ] <p><i>(Alpa 0 = 5 , Alpa 1 = 3 , Alpa 2 = 3 , Alpa 3 = 2 , Alpa 4 = 1 , Alpa 5 = 1)</i></p></label> 
                  
                      <select name="jenis12" class="form-control">
                        <?php
                        $jenis12 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis12)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis12 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id12 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Izin = [ <?php echo $data->izin ?> ] <p><i>(Izin 0 = 5 , Izin 1 = 4 , Izin 2 = 3 , Izin 3 = 2 , Izin 4 = 1 , Izin > 5 = 1)</i></p></label>
                      <select name="jenis13" class="form-control">
                        <?php
                        $jenis13 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis13)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis13 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id13 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 . Sakit = [ <?php echo $data->sakit ?> ] <p><i>(Sakit 0 = 5 , Sakit 1 = 4 , Sakit 2 = 3 , Sakit 3 = 2 , Sakit 4 = 1 , Sakit > 5 = 1 )</i></p></label>
                      <select name="jenis14" class="form-control">
                        <?php
                        $jenis14 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis14)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis14 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id14 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  </div>

                  <h5 class="box-title"><b>IV . CATATAN HUKUMAN/PUSNISMENT<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Surat peringatan = [ <?php echo $data->sp ?> ] <p><i>(Tidak ada = 5 , Lisan/teguran = 4 , SP 1 : 3)</i></p></label>
                      <select name="jenis15" class="form-control">
                        <?php
                        $jenis15 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis15)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis15 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id15 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Terlambat = [ <?php echo $data->terlambat ?> ] <p><i>(Terlambat 0-3 = 5, Terlambat 4-5 = 4 , Terlambat 6-8 = 3 , Terlambat 8-10 = 2 , Terlambat > 10 = 1)</i></p></label>
                      <select name="jenis16" class="form-control">
                        <?php
                        $jenis16 = $this->db->query("SELECT * FROM tb_hmp_kriteria")->result();
                        
                        if (empty($jenis16)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis16 as $jenis_nilai){
                        ?>
                       <option <?php if( $data->jenis_id16 == $jenis_nilai->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_nilai->jenis_id ;?>'><?php echo $jenis_nilai->jenis_nilai ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">STATUS</label>
                      <select name="jenis" class="form-control">
                        <?php
                        $jenis = $this->db->query("SELECT * FROM tb_jenis_surat")->result();
                        
                        if (empty($jenis)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($jenis as $jenis_surat){
                        ?>
                       <option <?php if( $data->jenis_id == $jenis_surat->jenis_id) {echo "selected"; } ?> value='<?php echo $jenis_surat->jenis_id ;?>'><?php echo $jenis_surat->jenis_surat ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                      </select>
                  </div>
                  
                  <input type="hidden" name="id" value="<?php echo $data->id_karyawan ?>">
                  <a href="<?php echo base_url(); ?>admin/input_nilai" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>