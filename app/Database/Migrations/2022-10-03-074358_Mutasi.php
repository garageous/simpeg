<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mutasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mutasi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'posisi_lama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'dpt_lama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'uk_lama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'posisi_baru' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'dpt_baru' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'uk_baru' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'alasan' => [
                'type' => 'TEXT'
            ],
            'tgl_mutasi' => [
                'type' => 'DATE',
            ],
            'alasan_mutasi' => [
                'type' => 'TEXT',
            ],
            'tgl_diusulkan' => [
                'type' => 'DATE',
            ],
            'pengusul' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
            ],
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at' => [
                'type' => 'DATE',
            ],
            'updated_at' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_mutasi', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('mutasi');
    }

    public function down()
    {
        $this->forge->dropForeignKey('mutasi', 'mutasi_id_karyawan_foreign');
        $this->forge->dropTable('mutasi');
    }
}
