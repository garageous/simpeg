<?= $this->extend('/layouts/template'); ?>

<?= $this->section('content'); ?>

  <div class="container-fluid py-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6>Form Permohonan Training</h6>
          </div>
        </div>

        <div class="card-body ms-4">
            <div class="row">
                <!-- Data Karyawan -->
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Karyawan</label>
                        <input class="form-control" type="text">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nomor Karyawan</label>
                        <input class="form-control" type="text">
                    </div>
                    
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Posisi</label>
                        <input class="form-control" type="text">
                    </div>
                    
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Departemen</label>
                        <input class="form-control" type="text">
                    </div>
                    
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" type="email">
                    </div>
                    
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">No. Telepon</label>
                        <input class="form-control" type="text">
                    </div>
                </div>

                <!-- Data Pelatihan -->
                <div class="col-md-5 ms-5">                
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Pelatihan</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Institusi Penyelenggara</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Durasi</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="form-control-label">Dari</label>
                            <input class="form-control" type="date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="form-control-label">Sampai</label>
                            <input class="form-control" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Biaya Pelatihan</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Keperluan Akomodasi</label><br>
                        <input class="form-check-input" type="radio" id="ya" name="akomodasi">
                        <label for="ya">Ya</label>
                        <input class="form-check-input" type="radio" id="tidak" name="akomodasi">
                        <label for="tidak">Tidak</label>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Biaya Akomodasi</label>
                        <input class="form-control" type="number">
                    </div>
                
                </div>
          </div>

          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end mt-4">Simpan</button>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>