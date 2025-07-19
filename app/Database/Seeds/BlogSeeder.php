<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('blogs')->insert([
            'title'   => 'Promo Buka Puasa Spesial!',
            'slug'    => 'promo-buka-puasa',
            'excerpt' => 'Nikmati diskon hingga 30% selama bulan Ramadan.',
            'content' => '<p>Kami hadirkan menu spesial dengan harga terjangkau selama bulan Ramadan!</p>',
            'image'   => 'uploads/blogs/promo-ramadan.jpg',
        ]);
    }
}
