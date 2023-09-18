<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    private $table = 'food';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_makanan' => 'soto ayam',
                'deskripsi' => 'Soto ayam adalah makanan khas Indonesia yang berupa sejenis sup ayam 
                 dengan kuah yang berwarna kekuningan.',            
                'harga' => 'Rp.16.000',
            ],
            [
                'id' => 2,
                'nama_makanan' => 'sate',
                'deskripsi' => 'Sate adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan 
                 ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang 
                 menggunakan bara arang kayu. Sate disajikan dengan berbagai macam bumbu yang bergantung pada variasi resep sate.',
                'harga' => 'Rp.18.000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
