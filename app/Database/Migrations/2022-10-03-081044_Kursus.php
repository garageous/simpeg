<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kursus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kursus' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true,
            ],
            'thn_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
                'null' => true,
            ],
            'durasi_kursus' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'ijazah_kursus' => [
                'type' => 'TEXT',
                'null' => true,
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
        $this->forge->addKey('id_kursus', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('kursus');
    }

    public function down()
    {
        $this->forge->dropForeignKey('kursus', 'kursus_id_karyawan_foreign');
        $this->forge->dropTable('kursus');
    }
}
