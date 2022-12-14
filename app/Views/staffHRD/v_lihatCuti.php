<?= $this->extend('/layouts/template_staff'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <!-- Tabel -->
  <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Data Cuti Karyawan</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="text-xs" align="center">
              <th>NO.</th>
              <th>NAMA</th>
              <th>TIPE CUTI</th>
              <th>TANGGAL CUTI</th>
              <th>TANGGAL DIAJUKAN</th>
              <th>STATUS</th>
              <th>AKSI</th>
            </thead>

            <tbody class="text-xs"  align="center">
              <?php 
                $id_cuti = 0;
                foreach ($tabelCuti as $dataCuti):
                  $id_cuti++                
              ?>

              <tr>
                <td><?= $id_cuti; ?></td>
                <td>nama_kr</td>
                <td><?= $dataCuti['jenis_cuti']; ?></td>
                <td>
                  <?= date('d/m/Y', strtotime($dataCuti['mulai_cuti']));?>
                  -
                  <?= date('d/m/Y', strtotime($dataCuti['akhir_cuti'])); ?>
                </td>
                <td><?= date('d/m/Y', strtotime($dataCuti['created_at'])); ?></td>
                <td><?= $dataCuti['status_cuti']; ?></td>
                <td>
                  <button type="button" class="btn btn-outline-info btn-sm" onclick="window.location='<?= site_url('staff/detail-cuti/' . $dataCuti['id_cuti']) ?>'">Detail</button>
                  <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                </td>
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