<?= $this->extend('/layouts/template'); ?>

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
  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Data Cuti</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table">
              <tbody class="text-xs">
              <th>NO.</th>
              <th>TIPE CUTI</th>
              <th>DARI</th>
              <th>SAMPAI</th>
              <th>TOTAL DURASI</th>
              <th>STATUS</th>

              <tr>
                <td>1</td>
                <td>Cuti Tahunan</td>
                <td>20/07/2022</td>
                <td>21/07/2022</td>
                <td>2 Hari</td>
                <td class="align-middle">Dalam proses</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Tabel -->
  <div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-2">Data Cuti</h6>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center ">
            <tbody>
              <tr>
                <td class="w-30">
                  <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                      <img src="/argon/assets/img/icons/flags/US.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm mb-0">United States</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">2500</h6>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$230,900</h6>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">29.9%</h6>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="w-30">
                  <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                      <img src="/argon/assets/img/icons/flags/DE.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm mb-0">Germany</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">3.900</h6>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$440,000</h6>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">40.22%</h6>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="w-30">
                  <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                      <img src="/argon/assets/img/icons/flags/GB.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm mb-0">Great Britain</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">1.400</h6>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$190,700</h6>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">23.44%</h6>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="w-30">
                  <div class="d-flex px-2 py-1 align-items-center">
                    <div>
                      <img src="/argon/assets/img/icons/flags/BR.png" alt="Country flag">
                    </div>
                    <div class="ms-4">
                      <p class="text-xs font-weight-bold mb-0">Country:</p>
                      <h6 class="text-sm mb-0">Brasil</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Sales:</p>
                    <h6 class="text-sm mb-0">562</h6>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <p class="text-xs font-weight-bold mb-0">Value:</p>
                    <h6 class="text-sm mb-0">$143,960</h6>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  <div class="col text-center">
                    <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                    <h6 class="text-sm mb-0">32.14%</h6>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>