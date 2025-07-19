<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PriceListSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('price_lists')->insert([
            'title'       => 'Daftar Harga Menu Resto Juli 2025',
            'description' => 'Daftar harga terbaru untuk semua menu.',
            'file_url'    => 'uploads/price-list-juli-2025.pdf'
        ]);
    }
}
