<?= $this->extend('/layouts/template_karyawan'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-2 col-sm-2 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="rounded-box-green mb-2 font-weight-bold">
            12
          </div>
          <h5 class="mb-0 text-xs text-center">
            Sisa Cuti Tahunan
          </h5>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-sm-2 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="rounded-box-red mb-2 font-weight-bold">
            11
          </div>
          <h5 class="mb-0 text-xs text-center">
            Cuti Diambil
          </h5>
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
              <th>TIPE CUTI</th>
              <th>DARI</th>
              <th>SAMPAI</th>
              <th>TOTAL DURASI</th>
              <th>STATUS</th>
            </thead>

            <tbody class="text-xs"  align="center">

              <?php 
                $id_cuti = 0;
                foreach ($tabelCuti as $dataCuti):
                  $id_cuti++                
              ?>

                <tr>
                  <td><?= $id_cuti; ?></td>
                  <td><?= $dataCuti['jenis_cuti']; ?></td>
                  <td><?= $dataCuti['mulai_cuti']; ?></td>
                  <td><?= $dataCuti['akhir_cuti']; ?></td>
                  <td><?= $dataCuti['durasi_cuti']; ?></td>
                  <td class="align-middle"><?= $dataCuti['status_cuti']; ?></td>
                </tr>

              <?php endforeach ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>