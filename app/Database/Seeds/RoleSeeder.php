<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['role' => 'Staff HRD'],
            ['role' => 'Karyawan'],
            ['role' => 'Manager HRD'],
            ['role' => 'GM'],
        ];
        $this->db->table('roles')->insertBatch($data);
    }
}
