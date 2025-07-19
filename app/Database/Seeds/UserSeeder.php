<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'     => 'Admin',
            'email'    => 'admin@resto.local',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ];

        $this->db->table('users')->insert($data);
    }
}
