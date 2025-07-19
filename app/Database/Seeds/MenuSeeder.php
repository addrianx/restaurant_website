<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'name'         => 'Nasi Goreng Spesial',
                'description'  => 'Nasi goreng dengan topping ayam, telur, dan kerupuk.',
                'price'        => 25000,
                'image'        => 'uploads/menus/nasi-goreng.jpg',
                'category_id'  => 1, // Makanan
                'is_available' => true
            ],
            [
                'name'         => 'Es Teh Manis',
                'description'  => 'Teh manis dingin menyegarkan.',
                'price'        => 5000,
                'image'        => 'uploads/menus/es-teh.jpg',
                'category_id'  => 2, // Minuman
                'is_available' => true
            ],
        ];

        $this->db->table('menus')->insertBatch($menus);
    }
}
