<?= $this->extend('/layouts/template'); ?>

<?= $this->section('content'); ?>

  <div class="container-fluid py-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Form Permohonan Cuti</h6>
          </div>
        </div>

        <div class="card-body ms-4">
          <div class="row md-4">
            <div class="col-md-2">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Dari</label>
                <input class="form-control" type="date">
              </div>
            </div>
            <div class="col-md-2 ms-3">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Sampai</label>
                <input class="form-control" type="date">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label">Jumlah Hari</label>
              <input class="form-control" type="number">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label">Jenis Cuti</label>
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label">Keterangan/Pesan Tambahan</label>
              <textarea class="form-control" type="text" maxlength="500"></textarea>
            </div>
          </div>

          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end">Simpan</button>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>