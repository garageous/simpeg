<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bahasa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bahasa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'bahasa' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'tertulis' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
                'null' => true,
            ],
            'lisan' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
                'null' => true,
            ],
            'baca' => [
                'type' => 'VARCHAR',
                'constraint' => '12',
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
        $this->forge->addKey('id_bahasa', true);
        $this->forge->addForeignKey('id_karyawan', 'karyawan', 'id_karyawan');
        $this->forge->createTable('bahasa');
    }

    public function down()
    {
        $this->forge->dropForeignKey('bahasa', 'bahasa_id_karyawan_foreign');
        $this->forge->dropTable('bahasa');
    }
}
