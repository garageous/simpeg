<?= $this->extend('/layouts/template_staff'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <!-- Tabel -->
  <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Data Mutasi Karyawan</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="text-xs" align="center">
              <th>NO.</th>
              <th>NAMA</th>
              <th>POSISI LAMA</th>
              <th>POSISI BARU</th>
              <th>UNIT KERJA LAMA</th>
              <th>UNIT KERJA BARU</th>
              <th>AKSI</th>
            </thead>

            <tbody class="text-xs"  align="center">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>