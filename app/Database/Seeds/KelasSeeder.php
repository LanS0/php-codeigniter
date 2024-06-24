<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'KELAS BEGINNER',
                'harga'    => 15,
            ],
            [
                'name' => 'KELAS NEXT LEVEL',
                'harga'    => 20,
            ],
        ];

        // Simple Queries
        foreach ($data as $user) {
            $this->db->table('kelas')->insert($user);
        }
    }
}
