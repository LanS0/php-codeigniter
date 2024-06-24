<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role'     => 1,
            ],
            [
                'username' => 'jaka',
                'email'    => 'jaka@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role'     => 2,
                'is_valid' => true,
            ],
            [
                'username' => 'joko',
                'email'    => 'joko@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role'     => 2,
                'is_valid' => true,
            ],
            [
                'username' => 'jika',
                'email'    => 'jika@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role'     => 2,
                'is_valid' => false,
            ],
        ];

        // Simple Queries
        foreach ($data as $user) {
            $this->db->table('member')->insert($user);
        }
    }
}
