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
                <td><?= $karyawan['nama_karyawan']; ?></td>
                <th></th>
                <td></td>
                <td rowspan="5"><img src="/img/<?= $karyawan['foto']; ?>" class="img-thumbnail"></td>
              </tr>
              <tr>
                <th>Nama Pangggilan</th>
                <td><?= $karyawan['nama_panggilan']; ?></td>
              </tr>
              <tr>
                <th>NIK</th>
                <td><?= $karyawan['nik_karyawan']; ?></td>
              </tr>
              <tr>
                <th>Posisi</th>
                <td><?= $karyawan['posisi']; ?></td>
              </tr>
              <tr>
                <th>Departemen</th>
                <td><?= $karyawan['departemen']; ?></td>
              </tr>
              <tr>
                <th>Unit Kerja</th>
                <td><?= $karyawan['unit_kerja']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?= $karyawan['status_karyawan']; ?></td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td><?= $karyawan['tempat_lahir']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td><?= date('d/m/Y', strtotime($karyawan['tgl_lahir']));?></td>
                <th>Jenis Kelamin</th>
                <td><?= $karyawan['jenis_kelamin']; ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td><?= $karyawan['agama']; ?></td>
                <th>Golongan Darah</th>
                <td><?= $karyawan['goldar']; ?></td>
              </tr>
              <tr>
                <th>Informasi Kontak</th>
              </tr>
              <tr>
                <th>Alamat KTP</th>
                <td>
                  <?= $karyawan['alamatKtp_kr'] . ', ' . $karyawan['kelKtp_kr'] . ', ' . $karyawan['kecKtp_kr'] . ', ' . $karyawan['kotaKtp_kr'] . ', ' . $karyawan['provKtp_kr']; ?>
                </td>
                <th>Alamat saat ini</th>
                <td>
                  <?= $karyawan['alamat_kr'] . ', ' . $karyawan['kel_kr'] . ', ' . $karyawan['kec_kr'] . ', ' . $karyawan['kota_kr'] . ', ' . $karyawan['prov_kr']; ?>
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?= $karyawan['email']; ?></td>
              </tr>
              <tr>
                <th>No Telepon</th>
                <td><?= $karyawan['no_telp']; ?></td>
              </tr>
              <tr>
                <th>Data Keluarga</th>
              </tr>
              <tr>
                <th>Status Pernikahan</th>
                <td><?= $karyawan['status_pernikahan']; ?></td>
                <th>Anak ke</th>
                <td><?= $karyawan['anak_ke']; ?> dari <?= $karyawan['bersaudara']; ?> bersaudara</td>
              </tr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Pekerjaan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Ayah</th>
                    <td><?= $karyawan['nama_ayah']; ?></td>
                    <td><?= $karyawan['jk_ayah']; ?></td>
                    <td><?= date('d/m/Y', strtotime($karyawan['dob_ayah']));?></td>
                    <td><?= $karyawan['pend_ayah']; ?></td>
                    <td><?= $karyawan['job_ayah']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Ibu</th>
                    <td><?= $karyawan['nama_ibu']; ?></td>
                    <td><?= $karyawan['jk_ibu']; ?></td>
                    <td><?= date('d/m/Y', strtotime($karyawan['dob_ibu']));?></td>
                    <td><?= $karyawan['pend_ibu']; ?></td>
                    <td><?= $karyawan['job_ibu']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Saudara</th>
                    <td><?= $karyawan['nama_saudara']; ?></td>
                    <td><?= $karyawan['jk_saudara']; ?></td>
                    <td><?= $karyawan['dob_saudara']; ?></td>
                    <td><?= $karyawan['pend_saudara']; ?></td>
                    <td><?= $karyawan['job_saudara']; ?></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Pendidikan Terakhir</th>
                    <th scope="col">Pekerjaan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Pasangan</th>
                    <td><?= $karyawan['nama_pasangan']; ?></td>
                    <td><?= $karyawan['jk_pasangan']; ?></td>
                    <td><?= date('d/m/Y', strtotime($karyawan['dob_pasangan']));?></td>
                    <td><?= $karyawan['pend_pasangan']; ?></td>
                    <td><?= $karyawan['job_pasangan']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Anak</th>
                    <td><?= $karyawan['nama_anak']; ?></td>
                    <td><?= $karyawan['jk_anak']; ?></td>
                    <td><?= date('d/m/Y', strtotime($karyawan['dob_anak']));?></td>
                    <td><?= $karyawan['pend_anak']; ?></td>
                    <td><?= $karyawan['job_anak']; ?></td>
                  </tr>
                </tbody>
              </table>
              <tr>
                <th>Riwayat Pendidikan</th>
              </tr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Nama Lembaga Pendidikan</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">GPA</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Tahun Lulus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?= $karyawan['jenjang']; ?></th>
                    <td><?= $karyawan['nama_sekolah']; ?></td>
                    <td><?= $karyawan['jurusan']; ?></td>
                    <td><?= $karyawan['gpa']; ?></td>
                    <td><?= date('Y', strtotime($karyawan['thn_masuk']));?></td>
                    <td><?= date('Y', strtotime($karyawan['thn_lulus']));?></td>
                  </tr>
                </tbody>
              </table>
              <tr>
                <th>Pendidikan Nonformal</th>
              </tr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Jenis Kursus</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Durasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><?= $karyawan['jenis_kursus']; ?></th>
                    <td><?= $karyawan['thn_kursus']; ?></td>
                    <td><?= $karyawan['durasi_kursus']; ?></td>
                  </tr>
                </tbody>
              </table>
              <tr>
                <th>Kemampuan Bahasa</th>
              </tr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Bahasa</th>
                    <th scope="col">Tertulis</th>
                    <th scope="col">Lisan</th>
                    <th scope="col">Baca</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><?= $karyawan['bahasa']; ?></th>
                    <td><?= $karyawan['tertulis']; ?></td>
                    <td><?= $karyawan['lisan']; ?></td>
                    <td><?= $karyawan['baca']; ?></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-borderless">
                  <tr>
                    <th>Pengalaman Kerja</th>
                  </tr>
                  <tr>
                    <th>Nama Perusahaan</th>
                    <td><?= $karyawan['nama_perusahaan']; ?></td>
                  </tr>
                  <tr>
                    <th>Bidang Usaha</th>
                    <td><?= $karyawan['bidang_usaha']; ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?= $karyawan['email_perusahaan']; ?></td>
                  </tr>
                  <tr>
                    <th>No. Telepon</th>
                    <td><?= $karyawan['telp_perusahaan']; ?></td>
                  </tr>
                  <tr>
                    <th>Alamat Perusahaan</th>
                    <td>
                      <?= $karyawan['alamat_perusahaan'] . ', ' . $karyawan['kel_perusahaan'] . ', ' . $karyawan['kec_perusahaan'] . ', ' . $karyawan['kota_perusahaan'] . ', ' . $karyawan['prov_perusahaan']; ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Dari</th>
                    <td><?= date('m/Y', strtotime($karyawan['dari_lastjob']));?></td>
                    <th>Sampai</th>
                    <td><?= date('m/Y', strtotime($karyawan['sampai_lastjob']));?></td>              
                  </tr>
                  <tr>
                    <th>Gaji Terakhir</th>
                    <td><?= $karyawan['gaji_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Tunjangan</th>
                    <td><?= $karyawan['tunjangan_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Bonus</th>
                    <td><?= $karyawan['bonus_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Insentif</th>
                    <td><?= $karyawan['insentif_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Benefit</th>
                    <td><?= $karyawan['benefit_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Tugas dan Tanggung Jawab</th>
                    <td><?= $karyawan['jobdesk_lastjob']; ?></td>
                  </tr>
                  <tr>
                    <th>Alasan Mengundurkan Diri</th>
                    <td><?= $karyawan['resign_lastjob']; ?></td>
                  </tr>
              </table>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>