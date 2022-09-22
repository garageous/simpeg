<?php

namespace App\Database\Seeds;

use App\Database\Migrations\Karyawan;
use App\Models\KaryawanModel;
use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $KaryawanModel = model('KaryawanModel');
        $faker = \Faker\Factory::create('id_ID');

        for ($i=0; $i <= 10; $i++) { 
            $KaryawanModel->insert([
                'username'          => $faker->bothify('?????-#####'),
                'password'          => password_hash($faker->password, PASSWORD_DEFAULT),
                'nama_karyawan'     => $faker->name(),
                'nama_panggilan'    => $faker->firstName(),
                'nik_karyawan'      => $faker->numerify('################'),
                'posisi'            => $faker->jobTitle(),
                'departemen'        => $faker->jobTitle(),
                'status_karyawan'  => $faker->text(),
                'tempat_lahir'      => $faker->city(),
                'tgl_lahir'         => $faker->date('d/m/Y'),
                'jenis_kelamin'     => $faker->randomElement(['perempuan', 'laki-laki']),
                'kewarganegaraan'   => $faker->randomElement(['WNA', 'WNI']),
                'agama'             => $faker->randomElement(['Islam', 'Kristan', 'Katolik', 'Buddha', 'Hindu', 'Konghuchu']),
                'goldar'            => $faker->randomElement(['A', 'B', 'O', 'AB']),
                'provKtp_kr'        => $faker->state(),
                'kotaKtp_kr'        => $faker->city(),
                'kecKtp_kr'         => $faker->city(),
                'kelKtp_kr'         => $faker->city(),
                'alamatKtp_kr'      => $faker->address(),
                'prov_kr'           => $faker->state(),
                'kota_kr'           => $faker->city(),
                'kec_kr'            => $faker->city(),
                'kel_kr'            => $faker->city(),
                'alamat_kr'         => $faker->address(),
                'email'             => $faker->email(),
                'no_telp'           => $faker->phoneNumber(),
                'status_pernikahan' => $faker->randomElement(['Lajang', 'Menikah', 'Janda', 'Duda']),
                'anak_ke'           => $faker->randomDigitNotNull(),
                'bersaudara'        => $faker->randomDigitNotNull(),
                'nama_ayah'         => $faker->name(),
                'jk_ayah'           => $faker->randomElement(['perempuan', 'laki-laki']),
                'dob_ayah'          => $faker->date('d/m/Y'),
                'pend_ayah'         => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'job_ayah'          => $faker->jobTitle(),
                'nama_ibu'          => $faker->name(),
                'jk_ibu'            => $faker->randomElement(['perempuan', 'laki-laki']),
                'dob_ibu'           => $faker->date('d/m/Y'),
                'pend_ibu'          => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'job_ibu'           => $faker->jobTitle(),
                'nama_saudara'      => $faker->name(),
                'jk_saudara'        => $faker->randomElement(['perempuan', 'laki-laki']),
                'dob_saudara'       => $faker->date('d/m/Y'),
                'pend_saudara'      => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'job_saudara'       => $faker->jobTitle(),
                'nama_pasangan'     => $faker->name(),
                'jk_pasangan'       => $faker->randomElement(['perempuan', 'laki-laki']),
                'dob_pasangan'      => $faker->date('d/m/Y'),
                'pend_pasangan'     => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'job_pasangan'      => $faker->jobTitle(),
                'nama_anak'         => $faker->name(),
                'jk_anak'           => $faker->randomElement(['perempuan', 'laki-laki']),
                'dob_anak'          => $faker->date('d/m/Y'),
                'pend_anak'         => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'job_anak'          => $faker->jobTitle(),
                'jenjang'           => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1/D4', 'S2', 'S3']),
                'nama_sekolah'      => $faker->company(),
                'jurusan'           => $faker->words(),
                'gpa'               => $faker->randomFloat(1, 4) ,
                'thn_masuk'         => $faker->year(),
                'jenis_kursus'      => $faker->words(),
                'thn_kursus'        => $faker->year(),
                'durasi_kursus'     => $faker->bothify('??', $faker->randomElement(['hari', 'bulan', 'tahun'])),
                'ijazah_kursus'     => $faker->text(),
                'bahasa'            => $faker->words(),
                'tertulis'          => $faker->randomElement(['beginner', 'intermediete', 'advance']),
                'lisan'             => $faker->randomElement(['beginner', 'intermediete', 'advance']),
                'baca'              => $faker->randomElement(['beginner', 'intermediete', 'advance']),
                'nama_sekolah'      => $faker->company(),
                'bidang_usaha'      => $faker->words(),
                'email_perusahaan'  => $faker->email(),
                'telp_perusahaan'   => $faker->e164PhoneNumber(),
                'prov_perusahaan'   => $faker->state(),
                'kota_perusahaan'   => $faker->city(),
                'kec_perusahaan'    => $faker->city(),
                'kel_perusahaan'    => $faker->city(),
                'alamat_perusahaan' => $faker->address(),
                'dari_lastjob'      => $faker->date('m/Y'),
                'sampai_lastjob'    => $faker->date('m/Y'),
                'jabatan_lastjob'   => $faker->jobTitle(),
                'gaji_lastjob'      =>
                'tunjangan_lastjob'    =>
                'bonus_lastjob'    =>
                'insentif_lastjob'    =>
                'benefit_lastjob'    =>
                'jobdesk_lastjob'    =>
                'resign_lastjob'    =>
                'created_at'    =>
                'updated_at'
            ]);
        }
    }
}
