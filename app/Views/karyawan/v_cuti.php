<?= $this->extend('/layouts/template_karyawan'); ?>

<?= $this->section('content'); ?>

  <div class="container-fluid py-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Form Permohonan Cuti</h6>
          </div>
        </div>

        <form action="/permohonan" method="POST">
          <div class="card-body ms-4">
            <div class="row md-4">
              <div class="col-md-2">
                <div class="form-group">
                <label for="mulai_cuti" class="form-control-label">Dari</label>
                <input class="form-control" type="date" id="mulai_cuti" name="mulai_cuti">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="akhir_cuti" class="form-control-label">Sampai</label>
                <input class="form-control" type="date" id="akhir_cuti" name="akhir_cuti">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label">Jumlah Hari</label>
              <input class="form-control" type="number" id="durasi_cuti" name="durasi_cuti">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="jenis_cuti" class="form-control-label">Jenis Cuti</label>
              
              <select class="form-control dropdown-toggle" name="jenis_cuti" id="jenis_cuti">
                <option value="" selected disabled>Jenis Cuti</option>
                <option value="Cuti Tahunan">Cuti Tahunan</option>
                <option value="Cuti Melahirkan">Cuti Melahirkan</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="keterangan_cuti" class="form-control-label">Keterangan/Pesan Tambahan</label>
              <textarea class="form-control" type="text" id="keterangan_cuti" name="keterangan_cuti" maxlength="500"></textarea>
            </div>
          </div>

          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end" type="submit">Simpan</button>
        </form>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>