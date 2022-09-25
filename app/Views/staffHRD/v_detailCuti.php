<?= $this->extend('/layouts/template_staff'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Data Karyawan</h6>
          </div>
        </div>
        <div class="table-responsive text-sm px-4 mb-4">
          <table class="table table-borderless align-middle">
            <tbody>
                <tr>
                    <th>Nama Karyawan</th>
                    <td>nama_kr</td>
                </tr>
                <tr>
                    <th>Nomor Karyawan</th>
                    <td>nama_kr</td>
                </tr>
                <tr>
                    <th>Tipe Cuti</th>
                    <td><?= $tabelCuti['jenis_cuti']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Cuti</th>
                    <td>
                        <?= date('d/m/Y', strtotime($tabelCuti['mulai_cuti']));?>
                        -
                        <?= date('d/m/Y', strtotime($tabelCuti['akhir_cuti'])); ?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Diajukan</th>
                    <td><?= date('d/m/Y', strtotime($tabelCuti['created_at'])); ?></td>
                </tr>
                <tr>
                    <th>Alasan Cuti</th>
                    <td><?= $tabelCuti['keterangan_cuti']; ?></td>
                </tr>
                <tr>
                    <th>Status Cuti</th>
                    <td><?= $tabelCuti['status_cuti']; ?></td>
                </tr>
                <tr>
                    <th>Pesan</th>
                    <td><?= $tabelCuti['status_cuti']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Konfirmasi</th>
                    <td>tgl</td>
                </tr>
            </tbody>

            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>