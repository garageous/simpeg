<?= $this->extend('/layouts/template_karyawan'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between py-2 ms-2">
          <h6 class="mb-2">Pendaftaran Karyawan</h6>
        </div>
      </div>

      <form action="/staff/store" method="POST">
        <!-- fungsi csrf biar kalo mau isi form cmn bisa disini -->
        <?= csrf_field(); ?>
        <div class="card-body ms-4">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nama_karyawan" class="form-control-label">Nama</label>
                <input class="form-control <?= ($validation->hasError('nama_karyawan')) ? 'is-invalid': ''; ?>" type="text" id="nama_karyawan" name="nama_karyawan" value="<?= old('nama_karyawan'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_karyawan') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="nama_panggilan" class="form-control-label">Nama Panggilan</label>
                <input class="form-control <?= ($validation->hasError('nama_panggilan')) ? 'is-invalid': ''; ?>" type="text" id="nama_panggilan" name="nama_panggilan" value="<?= old('nama_panggilan'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_panggilan') ?>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nik_karyawan" class="form-control-label">NIK</label>
                <input class="form-control <?= ($validation->hasError('nik_karyawan')) ? 'is-invalid': ''; ?>" type="text" id="nik_karyawan" name="nik_karyawan" value="<?= old('nik_karyawan'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nik_karyawan') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="posisi" class="form-control-label">Posisi</label>
                <input class="form-control <?= ($validation->hasError('posisi')) ? 'is-invalid': ''; ?>" type="text" id="posisi" name="posisi" value="<?= old('posisi'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('posisi') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="departemen" class="form-control-label">Departemen</label>
                <input class="form-control <?= ($validation->hasError('departemen')) ? 'is-invalid': ''; ?>" type="text" id="departemen" name="departemen" value="<?= old('departemen'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('departemen') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="status_karyawan" class="form-control-label">Status</label>
                <select class="form-control dropdown-toggle <?= ($validation->hasError('status_karyawan')) ? 'is-invalid': ''; ?>" name="status_karyawan" id="status_karyawan" value="<?= old('status_karyawan'); ?>">
                <!-- gabisa old nya -->
                  <option value="" selected disabled>Select</option>
                  <option value="Karyawan Tetap">Karyawan Tetap</option>
                  <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('status_karyawan') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="tempat_lahir" class="form-control-label">Tempat Lahir</label>
                <input class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid': ''; ?>" type="text" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('tempat_lahir') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="tgl_lahir" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid': ''; ?>" type="date" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('tgl_lahir') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid': ''; ?>">Jenis Kelamin</label value="<?= old('jenis_kelamin'); ?>"><br> 
                <!-- old nya gk jalan -->
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin" value="Perempuan">
                    <label for="jenis_kelamin1">Perempuan</label>                
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Laki-Laki">
                    <label for="jenis_kelamin2">Laki-Laki</label>                  
                  </div>
                  <div class="invalid-feedback">
                    <?= $validation->getError('jenis_kelamin') ?>
                  </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kewarganegaraan" class="form-control-label <?= ($validation->hasError('kewarganegaraan')) ? 'is-invalid': ''; ?>">Kewarganegaraan</label>
                <select class="form-control dropdown-toggle" name="kewarganegaraan" id="kewarganegaraan" value="<?= old('kewarganegaraan'); ?>">
                  <option value="" selected disabled>Select</option>
                  <option value="WNI">WNI</option>
                  <option value="WNA">WNA</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('kewarganegaraan') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="agama" class="form-control-label <?= ($validation->hasError('agama')) ? 'is-invalid': ''; ?>" value="<?= old('agama'); ?>">Agama</label>
                <select class="form-control dropdown-toggle" name="agama" id="agama">
                  <option value="" selected disabled>Select</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Konghuchu">Konghuchu</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('agama') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="goldar" class="form-control-label <?= ($validation->hasError('goldar')) ? 'is-invalid': ''; ?>" value="<?= old('goldar'); ?>">Golongan Darah</label>
                <select class="form-control dropdown-toggle" name="goldar" id="goldar">
                  <option value="" selected disabled>Select</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="O">O</option>
                  <option value="AB">AB</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('goldar') ?>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between py-2">
            <p class="text-md mb-2">Informasi Kontak</p>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="d-flex justify-content-between py-2">
                  <p class="text-sm mb-0">Alamat KTP</p>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="provKtp_kr" class="form-control-label <?= ($validation->hasError('provKtp_kr')) ? 'is-invalid': ''; ?>">Provinsi</label>
                    <select class="form-control dropdown-toggle" name="provKtp_kr" id="provKtp_kr" value="<?= old('provKtp_kr'); ?>">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('provKtp_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kotaKtp_kr" class="form-control-label <?= ($validation->hasError('kotaKtp_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kotaKtp_kr'); ?>">Kota</label>
                    <select class="form-control dropdown-toggle" name="kotaKtp_kr" id="kotaKtp_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kotaKtp_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kecKtp_kr" class="form-control-label <?= ($validation->hasError('kecKtp_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kecKtp_kr'); ?>">Kecamatan</label>
                    <select class="form-control dropdown-toggle" name="kecKtp_kr" id="kecKtp_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kecKtp_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kelKtp_kr" class="form-control-label <?= ($validation->hasError('kelKtp_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kelKtp_kr'); ?>">Kelurahan</label>
                    <select class="form-control dropdown-toggle" name="kelKtp_kr" id="kelKtp_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kelKtp_kr') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control no-resize <?= ($validation->hasError('alamatKtp_kr')) ? 'is-invalid': ''; ?>" type="text" id="alamatKtp_kr" name="alamatKtp_kr" maxlength="500" placeholder="Alamat Lengkap"><?= old('alamatKtp_kr'); ?></textarea>
                  <div class="invalid-feedback">
                      <?= $validation->getError('alamatKtp_kr') ?>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="d-flex justify-content-between py-2">
                  <p class="text-sm mb-0">Alamat saat ini</p>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="prov_kr" class="form-control-label <?= ($validation->hasError('prov_kr')) ? 'is-invalid': ''; ?>" value="<?= old('prov_kr'); ?>">Provinsi</label>
                    <select class="form-control dropdown-toggle" name="prov_kr" id="prov_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('prov_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kota_kr" class="form-control-label <?= ($validation->hasError('kota_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kota_kr'); ?>">Kota</label>
                    <select class="form-control dropdown-toggle" name="kota_kr" id="kota_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kota_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kec_kr" class="form-control-label <?= ($validation->hasError('kec_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kec_kr'); ?>">Kecamatan</label>
                    <select class="form-control dropdown-toggle" name="kec_kr" id="kec_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kec_kr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kel_kr" class="form-control-label <?= ($validation->hasError('kel_kr')) ? 'is-invalid': ''; ?>" value="<?= old('kel_kr'); ?>">Kelurahan</label>
                    <select class="form-control dropdown-toggle" name="kel_kr" id="kel_kr">
                      <option value="" selected disabled>Select</option>
                      <option value="Test">Test</option>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('kel_kr') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control no-resize <?= ($validation->hasError('alamat_kr')) ? 'is-invalid': ''; ?>" type="text" id="alamat_kr" name="alamat_kr" maxlength="500" placeholder="Alamat Lengkap"><?= old('alamat_kr'); ?></textarea>
                  <div class="invalid-feedback">
                    <?= $validation->getError('alamat_kr') ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid': ''; ?>" type="email" id="email" name="email" value="<?= old('email'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('email') ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="no_telp" class="form-control-label">No. Telepon</label>
                <input class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid': ''; ?>" type="text" id="no_telp" name="no_telp" value="<?= old('no_telp'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('no_telp') ?>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between py-2">
            <p class="text-md mb-2">Data Keluarga</p>
          </div>

          <div class="row">
            <div class="form-group">
              <label class="form-control-label <?= ($validation->hasError('status_pernikahan')) ? 'is-invalid': ''; ?>" value="<?= old('status_pernikahan'); ?>">Status Pernikahan</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status_pernikahan1" name="status_pernikahan" value="Lajang">
                <label for="status_pernikahan1">Lajang</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status_pernikahan2" name="status_pernikahan" value="Menikah">
                <label for="status_pernikahan2">Menikah</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status_pernikahan3" name="status_pernikahan" value="Janda/Duda">
                <label for="status_pernikahan3">Janda/Duda</label>
              </div>
              <div class="invalid-feedback">
                  <?= $validation->getError('status_pernikahan') ?>
                </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="anak_ke" class="form-control-label inline">Anak ke-</label>
                <input class="form-control <?= ($validation->hasError('anak_ke')) ? 'is-invalid': ''; ?>" type="text" id="anak_ke" name="anak_ke" value="<?= old('anak_ke'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('anak_ke') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="bersaudara" class="form-control-label inline">Dari ( ) bersaudara</label>
                <input class="form-control <?= ($validation->hasError('bersaudara')) ? 'is-invalid': ''; ?>" type="text" id="bersaudara" name="bersaudara" value="<?= old('bersaudara'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('bersaudara') ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_ayah" class="form-control-label">Nama Ayah</label>
                <input class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid': ''; ?>" type="text" id="nama_ayah" name="nama_ayah" value="<?= old('nama_ayah'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_ayah') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label <?= ($validation->hasError('jk_ayah')) ? 'is-invalid': ''; ?>" value="<?= old('jk_ayah'); ?>">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_ayah1" name="jk_ayah" value="Perempuan">
                  <label for="jk_ayah1">P</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_ayah2" name="jk_ayah" value="Laki-Laki">
                  <label for="jk_ayah2">L</label>
                </div>
                <div class="invalid-feedback">
                  <?= $validation->getError('jk_ayah') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="dob_ayah" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control <?= ($validation->hasError('dob_ayah')) ? 'is-invalid': ''; ?>" type="date" id="dob_ayah" name="dob_ayah" value="<?= old('dob_ayah'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('dob_ayah') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="pend_ayah" class="form-control-label">Pendidikan Terakhir</label>
                <input class="form-control <?= ($validation->hasError('pend_ayah')) ? 'is-invalid': ''; ?>" type="text" id="pend_ayah" name="pend_ayah" value="<?= old('pend_ayah'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('pend_ayah') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="job_ayah" class="form-control-label">Pekerjaan</label>
                <input class="form-control <?= ($validation->hasError('job_ayah')) ? 'is-invalid': ''; ?>" type="text" id="job_ayah" name="job_ayah" value="<?= old('job_ayah'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('job_ayah') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_ibu" class="form-control-label">Nama Ibu</label>
                <input class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid': ''; ?>" type="text" id="nama_ibu" name="nama_ibu" value="<?= old('nama_ibu'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_ibu') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label <?= ($validation->hasError('jk_ibu')) ? 'is-invalid': ''; ?>" value="<?= old('jk_ibu'); ?>">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_ibu1" name="jk_ibu" value="Perempuan">
                  <label for="jk_ibu1">P</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_ibu2" name="jk_ibu" value="Laki-Laki">
                  <label for="jk_ibu2">L</label>
                </div>
                <div class="invalid-feedback">
                  <?= $validation->getError('jk_ibu') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="dob_ibu" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control <?= ($validation->hasError('dob_ibu')) ? 'is-invalid': ''; ?>" type="date" id="dob_ibu" name="dob_ibu" value="<?= old('dob_ibu'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('dob_ibu') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="pend_ibu" class="form-control-label">Pendidikan Terakhir</label>
                <input class="form-control <?= ($validation->hasError('pend_ibu')) ? 'is-invalid': ''; ?>" type="text" id="pend_ibu" name="pend_ibu" value="<?= old('pend_ibu'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('pend_ibu') ?>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="job_ibu" class="form-control-label">Pekerjaan</label>
                <input class="form-control <?= ($validation->hasError('job_ibu')) ? 'is-invalid': ''; ?>" type="text" id="job_ibu" name="job_ibu" value="<?= old('job_ibu'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('job_ibu') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_saudara" class="form-control-label">Nama Saudara</label>
                <input class="form-control" type="text" id="nama_saudara" name="nama_saudara" value="<?= old('nama_saudara'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label" value="<?= old('jk_saudara'); ?>">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_saudara1" name="jk_saudara" value="Perempuan">
                  <label for="jk_saudara1">P</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_saudara2" name="jk_saudara" value="Laki-Laki">
                  <label for="jk_saudara2">L</label>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="dob_saudara" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control" type="date" id="dob_saudara" name="dob_saudara" value="<?= old('dob_saudara'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="pend_saudara" class="form-control-label">Pendidikan Terakhir</label>
                <input class="form-control" type="text" id="pend_saudara" name="pend_saudara" value="<?= old('pend_saudara'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="job_saudara" class="form-control-label">Pekerjaan</label>
                <input class="form-control" type="text" id="job_saudara" name="job_saudara" value="<?= old('job_saudara'); ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_pasangan" class="form-control-label">Nama Pasangan</label>
                <input class="form-control" type="text" id="nama_pasangan" name="nama_pasangan" value="<?= old('nama_pasangan'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label" value="<?= old('jk_pasangan'); ?>">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_pasangan1" name="jk_pasangan" value="Perempuan">
                  <label for="jk_pasangan1">P</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_pasangan2" name="jk_pasangan" value="Laki-Laki">
                  <label for="jk_pasangan2">L</label>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="dob_pasangan" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control" type="date" id="dob_pasangan" name="dob_pasangan" value="<?= old('dob_pasangan'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="pend_pasangan" class="form-control-label">Pendidikan Terakhir</label>
                <input class="form-control" type="text" id="pend_pasangan" name="pend_pasangan" value="<?= old('pend_pasangan'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="job_pasangan" class="form-control-label">Pekerjaan</label>
                <input class="form-control" type="text" id="job_pasangan" name="job_pasangan" value="<?= old('job_pasangan'); ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_anak" class="form-control-label">Nama Anak</label>
                <input class="form-control" type="text" id="nama_anak" name="nama_anak" value="<?= old('nama_anak'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label" value="<?= old('jk_anak'); ?>">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_anak1" name="jk_anak" value="Perempuan">
                  <label for="jk_anak1">P</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="jk_anak2" name="jk_anak" value="Laki-Laki">
                  <label for="jk_anak2">L</label>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="dob_anak" class="form-control-label">Tanggal Lahir</label>
                <input class="form-control" type="date" id="dob_anak" name="dob_anak" value="<?= old('dob_anak'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="pend_anak" class="form-control-label">Pendidikan Terakhir</label>
                <input class="form-control" type="text" id="pend_anak" name="pend_anak" value="<?= old('pend_anak'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="job_anak" class="form-control-label">Pekerjaan</label>
                <input class="form-control" type="text" id="job_anak" name="job_anak" value="<?= old('job_anak'); ?>">
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between py-2">
            <p class="text-md mb-2">Riwayat Pendidikan</p>
          </div>
          <div class="d-flex justify-content-between py-2 px-2">
            <p class="text-md mb-2">Pendidikan Formal</p>
          </div>

          <div class="row px-2">
            <div class="col-md-2">
              <div class="form-group">
                <label for="jenjang" class="form-control-label" value="<?= old('jenjang'); ?>">Jenjang</label>
                <select class="form-control dropdown-toggle" name="jenjang" id="jenjang">
                  <option value="" selected disabled>Select</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="S1">S1</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama_sekolah" class="form-control-label">Nama Lembaga Pendidikan</label>
                <input class="form-control" type="text" id="nama_sekolah" name="nama_sekolah" value="<?= old('nama_sekolah'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="jurusan" class="form-control-label">Jurusan</label>
                <input class="form-control" type="text" id="jurusan" name="jurusan" value="<?= old('jurusan'); ?>">
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label for="gpa" class="form-control-label">GPA</label>
                <input class="form-control" type="text" id="gpa" name="gpa" value="<?= old('gpa'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="thn_masuk" class="form-control-label">Tahun Masuk</label>
                <input class="form-control" type="text" id="thn_masuk" name="thn_masuk" value="<?= old('thn_masuk'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="thn_lulus" class="form-control-label">Tahun Lulus</label>
                <input class="form-control" type="text" id="thn_lulus" name="thn_lulus" value="<?= old('thn_lulus'); ?>">
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between py-2 px-2">
            <p class="text-md mb-2">Pendidikan Nonformal</p>
          </div>
          <div class="row px-2">
            <div class="col-md-4">
              <div class="form-group">
                <label for="jenis_kursus" class="form-control-label">Jenis Kursus</label>
                <input class="form-control" type="text" id="jenis_kursus" name="jenis_kursus" value="<?= old('jenis_kursus'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="thn_kursus" class="form-control-label">Tahun</label>
                <input class="form-control" type="text" id="thn_kursus" name="thn_kursus" value="<?= old('thn_kursus'); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="durasi_kursus" class="form-control-label">Durasi</label>
                <input class="form-control" type="text" id="durasi_kursus" name="durasi_kursus" value="<?= old('durasi_kursus'); ?>">
              </div>
            </div>
            
          </div>

          <div class="d-flex justify-content-between py-2">
            <p class="text-md mb-2">Kemampuan Bahasa</p>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="bahasa" class="form-control-label">Bahasa</label>
                <input class="form-control" type="text" id="bahasa" name="bahasa" value="<?= old('bahasa'); ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="tertulis" class="form-control-label">Tertulis</label>
                <input class="form-control" type="text" id="tertulis" name="tertulis" value="<?= old('tertulis'); ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="lisan" class="form-control-label">Lisan</label>
                <input class="form-control" type="text" id="lisan" name="lisan" value="<?= old('lisan'); ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="baca" class="form-control-label">Baca</label>
                <input class="form-control" type="text" id="baca" name="baca" value="<?= old('baca'); ?>">
              </div>
            </div>
          </div>


          <div class="d-flex justify-content-between py-2">
            <p class="text-md mb-2">Pengalaman Kerja</p>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_perusahaan" class="form-control-label">Nama Perusahaan</label>
                <input class="form-control" type="text" id="nama_perusahaan" name="nama_perusahaan" value="<?= old('nama_perusahaan'); ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="bidang_usaha" class="form-control-label">Bidang Usaha</label>
                <input class="form-control" type="text" id="bidang_usaha" name="bidang_usaha" value="<?= old('bidang_usaha'); ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email_perusahaan" class="form-control-label">Email Perusahaan</label>
                <input class="form-control" type="email" id="email_perusahaan" name="email_perusahaan" value="<?= old('email_perusahaan'); ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="telp_perusahaan" class="form-control-label">No. Telepon</label>
                <input class="form-control" type="text" id="telp_perusahaan" name="telp_perusahaan" value="<?= old('telp_perusahaan'); ?>">
              </div>
            </div>

            <label class="form-control-label">Alamat</label>

            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="prov_perusahaan" class="form-control-label" value="<?= old('prov_perusahaan'); ?>">Provinsi</label>
                      <select class="form-control dropdown-toggle" name="prov_perusahaan" id="prov_perusahaan">
                        <option value="" selected disabled>Select</option>
                        <option value="Test">Test</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="kota_perusahaan" class="form-control-label" value="<?= old('kota_perusahaan'); ?>">Kota</label>
                      <select class="form-control dropdown-toggle" name="kota_perusahaan" id="kota_perusahaan">
                        <option value="" selected disabled>Select</option>
                        <option value="Test">Test</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="kec_perusahaan" class="form-control-label" value="<?= old('kec_perusahaan'); ?>">Kecamatan</label>
                      <select class="form-control dropdown-toggle" name="kec_perusahaan" id="kec_perusahaan">
                        <option value="" selected disabled>Select</option>
                        <option value="Test">Test</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="kel_perusahaan" class="form-control-label" value="<?= old('kel_perusahaan'); ?>">Kelurahan</label>
                      <select class="form-control dropdown-toggle" name="kel_perusahaan" id="kel_perusahaan">
                        <option value="" selected disabled>Select</option>
                        <option value="Test">Test</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control no-resize" type="text" id="alamat_perusahaan" name="alamat_perusahaan" maxlength="500" placeholder="Alamat Lengkap"><?= old('alamat_perusahaan'); ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dari_lastjob" class="form-control-label">Dari</label>
                  <input class="form-control" type="date" id="dari_lastjob" name="dari_lastjob" value="<?= old('dari_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="sampai_lastjob" class="form-control-label">Sampai</label>
                  <input class="form-control" type="date" id="sampai_lastjob" name="sampai_lastjob" value="<?= old('sampai_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="jabatan_lastjob" class="form-control-label">Jabatan</label>
                  <input class="form-control" type="text" id="jabatan_lastjob" name="jabatan_lastjob" value="<?= old('jabatan_lastjob'); ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="gaji_lastjob" class="form-control-label">Gaji</label>
                  <input class="form-control" type="text" id="gaji_lastjob" name="gaji_lastjob" value="<?= old('gaji_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="tunjangan_lastjob" class="form-control-label">Tunjangan</label>
                  <input class="form-control" type="text" id="tunjangan_lastjob" name="tunjangan_lastjob" value="<?= old('tunjangan_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="bonus_lastjob" class="form-control-label">Bonus</label>
                  <input class="form-control" type="text" id="bonus_lastjob" name="bonus_lastjob" value="<?= old('bonus_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="insentif_lastjob" class="form-control-label">Insentif</label>
                  <input class="form-control" type="text" id="insentif_lastjob" name="insentif_lastjob" value="<?= old('insentif_lastjob'); ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="benefit_lastjob" class="form-control-label">Benefit</label>
                  <input class="form-control" type="text" id="benefit_lastjob" name="benefit_lastjob" value="<?= old('benefit_lastjob'); ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jobdesk_lastjob" class="form-control-label">Tugas dan Tanggung Jawab</label>
                  <textarea class="form-control no-resize" type="text" id="jobdesk_lastjob" name="jobdesk_lastjob" maxlength="500"><?= old('jobdesk_lastjob'); ?></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="resign_lastjob" class="form-control-label">Alasan Mengundurkan Diri</label>
                  <textarea class="form-control no-resize" type="text" id="resign_lastjob" name="resign_lastjob" maxlength="500"><?= old('resign_lastjob'); ?></textarea>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end" type="submit">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>