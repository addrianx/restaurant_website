<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('contacts')->insert([
            'phone'        => '081234567890',
            'email'        => 'info@resto.local',
            'address'      => 'Jl. Kenangan No. 17, Jakarta',
            'whatsapp_link'=> 'https://wa.me/6281234567890',
            'map_embed'    => '<iframe src="https://maps.google.com/..."></iframe>'
        ]);
    }
}
