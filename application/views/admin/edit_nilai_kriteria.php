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

                <?php 

                $umum = null;
                $khusus = null;
                $kehadiran = null;
                $hukuman = null;
                $proaktif = null;
                $percaya_diri = null;
                $disiplin = null;
                $mandiri = null;
                $emosi = null;
                $kerjasama = null;
                $pengetahuan = null;
                $akurasi = null;
                $keputusan = null;
                $tanggung_jawab = null;
                $hasil_kerjaan = null;
                $alpha = null;
                $izin = null;
                $sakit = null;
                $sp = null;
                $terlambat = null;

                foreach ($kriteria as $item) {
                    if($item->id_kriteria == 1){
                      $khusus = $item->skala;
                    }
                    else if($item->id_kriteria == 2){
                      $umum = $item->skala;
                    }
                    else if ($item->id_kriteria == 3) {
                      $kehadiran = $item->skala;
                    } 
                    else{
                      $hukuman = $item->skala;
                    } 
                }


                foreach ($subkriteria as $item) {
                    if($item->id_sub_kriteria == 1){
                      $proaktif = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 2){
                      $percaya_diri = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 3){
                      $disiplin = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 4){
                      $mandiri = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 5){
                      $emosi = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 6){
                      $kerjasama = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 7){
                      $pengetahuan = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 8){
                      $akurasi = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 9){
                      $keputusan = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 10){
                      $tanggung_jawab = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 11){
                      $hasil_kerjaan = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 12){
                      $alpha = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 13){
                      $izin = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 14){
                      $sakit = $item->skala;
                    }
                    else if($item->id_sub_kriteria == 15){
                      $sp = $item->skala;
                    }
                    else{
                      $terlambat = $item->skala;
                    }
                }?>
                <!-- form start -->
                <?php echo form_open('admin/insert_edit_kriteria'); ?>

                  <h3><strong>Kriteria</strong></h3>

                  <div class="form-group">
                    <label>Umum</label>
                      <select name="umum" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('umum', $item, $umum==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Khusus</label>
                      <select name="khusus" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('khusus', $item, $khusus==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Kehadiran</label>
                      <select name="kehadiran" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('kehadiran', $item, $kehadiran==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Hukuman</label>
                      <select name="hukuman" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('hukuman', $item, $hukuman==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>


                  <br><h3><strong>Sub Kriteria</strong></h3>                  
                  <h4>Sub Kriteria Umum</h4>

                  <div class="form-group">
                    <label>Proaktif</label>
                      <select name="proaktif" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('proaktif', $item, $proaktif==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Percaya Diri</label>
                      <select name="percaya_diri" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('percaya_diri', $item, $percaya_diri==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Disiplin</label>
                      <select name="disiplin" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('disiplin', $item, $disiplin==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Mandiri</label>
                      <select name="mandiri" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('mandiri', $item, $mandiri==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Emosi</label>
                      <select name="emosi" class="form-control">
                      <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('emosi', $item, $emosi==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Kerjasama</label>
                      <select name="kerjasama" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('kerjasama', $item, $kerjasama==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <br><h4>Sub Kriteria Khusus</h4>

                  <div class="form-group">
                    <label>Pengetahuan</label>
                      <select name="pengetahuan" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('pengetahuan', $item, $pengetahuan==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Akurasi</label>
                      <select name="akurasi" class="form-control">
                          <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('akurasi', $item, $akurasi==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Keputusan</label>
                      <select name="keputusan" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('keputusan', $item, $keputusan==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Tanggung Jawab</label>
                      <select name="tanggung_jawab" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('tanggung_jawab', $item, $tanggung_jawab==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Hasil Kerjaan</label>
                      <select name="hasil_kerjaan" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('hasil_kerjaan', $item, $hasil_kerjaan==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <br><h4>Sub Kriteria Kehadiran</h4>

                  <div class="form-group">
                    <label>Alpha</label>
                      <select name="alpha" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('alpha', $item, $alpha==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Izin</label>
                      <select name="izin" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('izin', $item, $izin==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Sakit</label>
                      <select name="sakit" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('sakit', $item, $sakit==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <br><h4>Sub Kriteria Hukuman</h4>

                  <div class="form-group">
                    <label>Surat Peringatan</label>
                      <select name="sp" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('sp', $item, $sp==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
                          <?php endforeach; ?>
                      </select>                    
                  </div>

                  <div class="form-group">
                    <label>Terlambat</label>
                      <select name="terlambat" class="form-control">
                        <?php foreach($skala as $item): ?>
                              <option value="<?php echo $item->nilai_skala;?>" <?php echo set_select('terlambat', $item, $terlambat==$item->nilai_skala) ?>><?php echo $item->nama_skala; ?></option>
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