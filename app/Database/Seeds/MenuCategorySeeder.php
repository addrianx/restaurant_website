<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Makanan', 'slug' => 'makanan'],
            ['name' => 'Minuman', 'slug' => 'minuman'],
            ['name' => 'Cemilan', 'slug' => 'cemilan'],
        ];

        $this->db->table('menu_categories')->insertBatch($categories);
    }
}
