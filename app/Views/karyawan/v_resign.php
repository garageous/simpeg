<?= $this->extend('/layouts/template_karyawan'); ?>

<?= $this->section('content'); ?>

  <div class="container-fluid py-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card ">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between py-2 ms-2">
            <h6 class="mb-2">Form Permohonan Resign</h6>
          </div>
        </div>

        <form action="/permohonan" method="POST">
          <div class="card-body ms-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Karyawan</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nomor Karyawan</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-control-label">Posisi</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-control-label">Departemen</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <input class="form-control" type="email">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-control-label">No. Telepon</label>
                    <input class="form-control" type="text">
                  </div>
                </div>

                <div class="col-md-5">
                    <label class="form-control-label">Alasan mengundurkan diri</label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kesepakatan bersama (tidak dapat diprotes)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Menerima pekerjaan lain
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pribadi (jelaskan di bawah)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Masalah transportasi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Mengganggu jadwal sekolah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Penugasan pekerjaan sementara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lainnya
                        </label>
                    </div>
                    <div class="form-group">
                    <label class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" maxlength="500"></textarea>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Dengan ini saya mengajukan pengunduran diri saya sebagai karyawan di PT ABC berlaku efektif pada</label>
                        <input class="form-control" type="date">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label">Tanda tangan karyawan</label>
                              <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label">Tanggal ditandatangani</label>
                              <input class="form-control" type="date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            



          <button class="btn btn-primary btn-sm ms-auto d-flex align-items-end">Simpan</button>
        </form>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>