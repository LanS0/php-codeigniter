<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'SERIAL',
                'auto_increment' => true
            ],
            'username'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'role'    => [
                'type'           => 'INT',
                'constraint'     => 1,
            ],
            'membership'    => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default'        => 0,
            ],
            'is_valid'    => [
                'type'           => 'BOOLEAN',
                'default'        => false,
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

        // Membuat tabel 'member'
        $this->forge->createTable('member');

        $seeder = \Config\Database::seeder();
        $seeder->call('UserSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
