<?= $this->extend('/layouts/template_staff'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-2 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-md-8">
              <p class="text-xs">JUMLAH KARYAWAN</p>
              <h2>551</h2>
            </div>
            <div class="col-md-4">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <a href="/staff/pendaftaran" type="button" class="btn btn-outline-primary">Pendaftaran Karyawan</a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-2 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-md-8">
              <p class="text-xs">JUMLAH DEPARTEMEN</p>
              <h2>14</h2>
            </div>
            <div class="col-md-4">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel -->
  <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Data Cuti</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="text-xs" align="center">
              <th>NO.</th>
              <th>NAMA</th>
              <th>POSISI</th>
              <th>UNIT KERJA</th>
              <th>AKSI</th>
            </thead>

            <tbody class="text-xs" align="center">



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>