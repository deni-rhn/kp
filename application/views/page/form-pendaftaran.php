  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url(<?php echo base_url('assets/'); ?>dist/img/batik.png)" !important;>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Form Pendaftaran Pasien
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->

        <div class="col-md-8 col-md-offset-1">
          <form id="data_pasien" action="<?php echo base_url('pendaftaran/daftar');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Isi Dengan Lengkap Form Dibawah ini</h3>
              </div>
              <div class="box-body">

                <!-- <div class="form-group">
                  <label>Alergi</label>
                  <input class="form-control" type="text" placeholder="Masukan Jenis Alergi" name="alergi">
                </div> -->

                <div class="form-group">
                  <label>No. RM</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor Rm" name="no_RM" value="<?php echo $rm ?>" readonly>
                </div>

                <div class="form-group">
                  <label class="control-label">Nama Kepala Keluarga</label>
                  <input type="text" name="nama_KK" id="nama_KK" class="form-control" placeholder="Kepala Keluarga" required>
                </div>

                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input class="form-control" type="text" placeholder="Nama Pasien" name="nama_pasien">
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    <label class="control-label">Tempat, Tanggal Lahir</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="col-sm-4">
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" >
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-inline">
                  <div class="row_s">
                    <div class="form-group">
                      <label>Alamat</label><br>
                      <br>
                      <div class="row_s">
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Prov." name="provinsi" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kab." name="kabupaten" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Kec." name="kecamatan" style="width:100%;">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Dusun" name="dusun" style="width:100%;">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RT" name="RT" style="width:100%;">
                        </div>
                        <div class="col-xs-2">
                          <input class="form-control" type="number" placeholder="RW" name="RW" style="width:100%;">
                        </div>
                        <div class="col-xs-4">
                          <input class="form-control" type="text" placeholder="Masukan Desa" name="desa" style="width:100%;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <br>

                <div class="form-group">
                  <label>No. BPJS</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor BPJS" name="no_BPJS">
                </div>

                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" type="number" placeholder="Masukan NIK" name="no_KTP">
                </div>

                <div class="form-group">
                  <label>NO. KK</label>
                  <input class="form-control" type="number" placeholder="Masukan Nomor KK" name="no_KK">
                </div>

                <div class="form-group">
                  <label class="control-label">Pendidikan</label>
                  <div class="">
                    <select class="form-control" name="pendidikan" id="pendidikan">
                        <option value="Sekolah Dasar">Sekolah Dasar</option>
                        <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                        <option value="Sekolah Menengah Atas/Khusus">Sekolah Menengah Atas/Khusus</option>
                        <option value="Diploma III (D3)">Diploma III (D3)</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Magister">Magister</option>
                        <option value="etc">etc</option>
                    </select>
                  </div>
                </div>

                <div class="form-group\">
                  <label>Pekerjaan</label> <br>
                  <input class="form-control" type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" style="width:100%;">
                </div>
                <br/>

                <div class="form-group">
                  <label class="control-label">Agama</label>
                  <div class="">
                    <select class="form-control" name="agama" id="agama">
                      <option value="islam">Islam</option>
                      <option value="kristen protestan">Kristen Protestan</option>
                      <option value="katolik">Katolik</option>
                      <option value="hindu">Hindu</option>
                      <option value="buddha">Buddha</option>
                      <option value="kong hu cu">Kong Hu Cu</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Status</label>
                  <div class="">
                    <select class="form-control" name="status" id="status">
                      <option value="belum kawin">Belum Kawin</option>
                      <option value="kawin">Kawin</option>
                      <option value="cerai hidup">Cerai Hidup</option>
                      <option value="cerita mati">Cerai Mati</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Kewarganegaraan</label>
                  <div class="">
                    <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                      <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                      <option value="Warga Negara Asing">Warga Negara Asing</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" type="text" placeholder="Masukan No Telphone" name="hp">
                </div>


                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="width: 30%;">Simpan</button>
                  <a href="#" id="print_v" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                </div>
                <br>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </form>
        </div>

        <div class="col-md-3">

          <div class="info-box" style="margin-bottom: 25px;">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nomor Antrian</span>
              <span class="info-box-number"> <?php echo $antrian;?></span>
              <input form="data_pasien" type="text" name="nomor_antrian" value="<?php  echo $antrian;?>" style="display:none" >
            </div>
          </div>

          <!-- <div class="wrp">
            <img src="<?php echo base_url('assets/');?>dist/img/prt.jpeg" style="width: 100%; height: auto;" alt="User Image">
          </div> -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
