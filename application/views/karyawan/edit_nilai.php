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
              <li><a href="<?php echo base_url(); ?>karyawan/input_nilai">Manage User</a></li>
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
                <?php echo form_open('karyawan/update_nilai'); ?>
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
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id1 ?>" />
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">2 . Percaya Diri (Keyakinan pada kemampuan diri sendiri untuk menyelesaikan tugas/tantangan/pekerjaannya)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id2 ?>" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">3 . Kedisiplinan (Ketaatan dalam menjalankan tugas pekerjaan sesuai Standar Operasi Prosedure/SOP yang telah diterapkan)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id3 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 . Kesehatan (Kemampuan dalam menjaga stamina tubuh, dari penyakit atau gangguan kesehatan)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id4 ?>" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">5 . Kemandirian (Kemampuan bekerja secara mandiri tanpa bantuan orang lain)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id5 ?>" />
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">6 . Stabilitas Emosi (Kemampuan untuk mengendalikan diri terhadap tindakan negatif saat ada cobaan, kususnya menghadapi tantangan atau saat bekerja dalam tekanan)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id6 ?>" />
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">7 . Kerjasama/team work  (Intensitas dan kesungguhan dalam mendorong kerja kelompok)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id7 ?>" />
                  </div>
                </div>
                <h5 class="box-title"><b>II . KOMPETENSI KHUSUS DALAM PELAKSANAAN TUGAS<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Pengetahuan/teknis (Penguasaan bidang pengetahuan yang terkait dengan pekerjaan untuk menggunakan, mengembangkan dan membagikan kepada orang lain)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id8 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Akurasi/ketelitian (Ketepatan dalam melakukan tugas)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id9 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 . Pengambilan keputusan (Kemampuan dalam memecahkan permasalahan dan mengambil keputusan dengan tepat dan cepat)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id10 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 . Tanggung jawab (Kemampuan dalam menanggung resiko akan pekerjaannya)</label>
                        <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id11 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">5 . Hasil pekerjaan (Kualitas kerja & Kuantitas pekerjaan yang dilakukan apakah sesuai standar yang telah ditetapkan)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id12 ?>" />
                  </div>
                </div>

                 <h5 class="box-title"><b>III . CATATAN KEHADIRAN<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Alpha (Alpa 0 = 5 , Alpa 1 = 3 , Alpa 2 = 3 , Alpa 3 = 2 , Alpa 4 = 1 , Alpa 5 = 1)</label>
                    <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id13 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Izin (Izin 0 = 5 , Izin 1 = 4 , Izin 2 = 3 , Izin 3 = 2 , Izin 4 = 1 , Izin > 5 = 1)</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id14 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 . Sakit (Sakit 0 = 5 , Sakit 1 = 4 , Sakit 2 = 3 , Sakit 3 = 2 , Sakit 4 = 1 , Sakit > 5 = 1 )</label>
                      <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id15 ?>" />
                  </div>
                  </div>

                  <h5 class="box-title"><b>IV . CATATAN HUKUMAN/PUSNISMENT<b></h5>
                <div class="box-header with-border">
                  <div class="form-group">
                    <label for="exampleInputEmail1">1 . Surat peringatan (Tidak ada = 5 , Lisan/teguran = 4 , SP 1 : 3) </label>
                    <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id16 ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">2 . Terlambat. (Terlambat 0-3 = 5, Terlambat 4-5 = 4 , Terlambat 6-8 = 3 , Terlambat 8-10 = 2 , Terlambat > 10 = 1)</label>
                    <input type="text" readonly="readonly" class="form-control" name="nama" value="<?php echo $data->jenis_id17 ?>" />
                  </div>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_karyawan ?>">
                  <a href="<?php echo base_url(); ?>karyawan/input_nilai" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>