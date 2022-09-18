<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cuti' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_cuti' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'mulai_cuti' => [
                'type' => 'DATE',
            ],
            'akhir_cuti' => [
                'type' => 'DATE',
            ],
            'durasi_cuti' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'keterangan_cuti' => [
                'type' => 'TEXT',
            ],
            'status_cuti' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'pesan' => [
                'type' => 'TEXT',
            ],
            'tgl_konf_cuti' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_cuti', true);
        $this->forge->createTable('cuti');
    }

    public function down()
    {
        $this->forge->dropTable('cuti');
    }
}
