<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'SERIAL',
                'auto_increment' => true
            ],
            'name'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'harga'    => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addKey('id', true);

        // Membuat tabel 'kelas'
        $this->forge->createTable('kelas');

        $seeder = \Config\Database::seeder();
        $seeder->call('KelasSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
