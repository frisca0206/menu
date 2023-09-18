<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SewaFilmTableSeeder extends Seeder
{
    private $table = 'sewa_film';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_peminjam' => 'yudha',
                'nama_film' => 'spiderman',
                'tanggal_pinjam' => 2023-07-05,
                'durasi_jam' => 4,
            ],
            [
                'id' => 2,
                'nama_peminjam' => 'putri',
                'nama_film' => 'twilight',
                'tanggal_pinjam' => 2023-10-12,
                'durasi_jam' => 3,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
