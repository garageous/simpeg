<?= $this->extend('/layouts/template_managerHRD'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-2 mb-3">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-md-8">
              <p class="text-xs">JUMLAH KARYAWAN</p>
              <h2><?= countData('karyawan'); ?></h2>
            </div>
            <div class="col-md-4">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col">
              <!-- <a type="button" href="/staff/pendaftaran" class="btn btn-custom align-middle">
                <iconify-icon inline icon="ant-design:plus-circle-outlined" style="color: #5e72e4;" width="25"></iconify-icon>
                Pendaftaran Karyawan
              </a> -->
              <a href="/staff/pendaftaran" type="button" class="btn btn-outline-primary">Pendaftaran Karyawan</a>
            </div>
          </div>
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
            <h6 class="mb-2">Data Karyawan</h6>
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

            <tbody class="text-xs">
              <?php 
                $id_karyawan = 0;
                foreach ($tabelKaryawan as $dataKaryawan):
                  $id_karyawan++                
              ?>

              <tr>
                <td class="text-center"><?= $id_karyawan; ?></td>
                <td>
                  <div class="row">
                    <div class="col-2">
                      <img class="mini-pfp" src="/img/<?= $dataKaryawan['foto']; ?>">
                    </div>
                    <div class="col">
                      <div class="row">
                        <p class="card-title text-xs mb-0"><?= $dataKaryawan['nama_karyawan']; ?></p>
                        <p class="text-xs"><?= $dataKaryawan['email']; ?></p>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center"><?= $dataKaryawan['posisi']; ?></td>
                <td class="text-center">PT ABC<?= $dataKaryawan['unit_kerja']; ?></td>
                <td class="text-center">
                  <button type="button" class="btn btn-outline-info btn-sm" onclick="window.location='<?= site_url('staff/data-karyawan/' . $dataKaryawan['id_karyawan']) ?>'">Detail</button>
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