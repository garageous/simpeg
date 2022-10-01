<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendidikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pend' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenjang' => [
                'type' => 'VARCHAR',
                'constraint' => '3',
                'null' => true,
            ],
            'nama_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'gpa' => [
                'type' => 'FLOAT',
                'constraint' => '4',
            ],
            'thn_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'thn_lulus' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ]
        ]);
        $this->forge->addKey('id_pend', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('pendidikan');
    }

    public function down()
    {
        $this->forge->dropForeignKey('pendidikan', 'pendidikan_id_karyawan_foreign');
        $this->forge->dropTable('pendidikan');
    }
}
