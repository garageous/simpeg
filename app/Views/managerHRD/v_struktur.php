<?= $this->extend('/layouts/template_managerHRD'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between py-2 ms-2">
          <h6 class="mb-2">Tambah Struktur Organisasi</h6>
        </div>
      </div>

      <form action="/tambah-struktur" method="POST" id="tambah_struktur">
        <?= csrf_field(); ?>
        <div class="card-body ms-4">
          <div class="col-md-4">
            <div class="form-group">
              <label for="nama_so" class="form-control-label <?= ($validation->hasError('nama_so')) ? 'is-invalid': ''; ?>">Nama Struktur Organisasi</label>
              <input class="form-control <?= ($validation->hasError('nama_so')) ? 'is-invalid': ''; ?>" type="text" id="nama_so" name="nama_so">
              <div class="invalid-feedback">
                <?= $validation->getError('nama_so') ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="jumlah_bagian" class="form-control-label <?= ($validation->hasError('jumlah_bagian')) ? 'is-invalid': ''; ?>">Jumlah Bagian</label>
              <input class="form-control <?= ($validation->hasError('jumlah_bagian')) ? 'is-invalid': ''; ?>" type="text" id="jumlah_bagian" name="jumlah_bagian">
              <div class="invalid-feedback">
                <?= $validation->getError('jumlah_bagian') ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="nama_bagian" class="form-control-label <?= ($validation->hasError('nama_bagian')) ? 'is-invalid': ''; ?>">Bagian</label>
              <input class="form-control <?= ($validation->hasError('nama_bagian')) ? 'is-invalid': ''; ?>" type="text" id="nama_bagian" name="nama_bagian">
              <div class="invalid-feedback">
                <?= $validation->getError('nama_bagian') ?>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-light btn-sm" id="tambah_data" name="tambah_data">Tambah Data</button>
          </div>          
          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end" type="submit">Simpan</button>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>