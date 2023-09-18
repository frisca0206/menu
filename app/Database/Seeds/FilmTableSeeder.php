<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FilmTableSeeder extends Seeder
{
    private $table = 'film';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_film' => 'annabelle',
                'genre' => 'horror',
                'deskripsi' => 'Pasangan suami istri Ed Warren (Patrick Wilson) dan Lorraine Warren (Vera Farmiga) 
                 sepakat untuk meletakkan boneka Annabelle di ruang khusus mereka. Dibalik lemari kaca suci dan mendapat 
                 berkat dari seorang pendeta.',
            ],
            [
                'id' => 2,
                'nama_film' => 'conjuring',
                'genre' => 'thriller',
                'deskripsi' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh 
                 roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural.',
            ],
            [
                'id' => 3,
                'nama_film' => 'jumanji',
                'genre' => 'adventure',
                'deskripsi' => 'Jumanji: The Next Level, keempat sahabat kembali lagi, tetapi permainannya telah berubah. 
                 Saat memutuskan masuk lagi ke Jumanji untuk menyelamatkan salah satu dari mereka, mereka menemukan segalanya tak seperti yang diduga. 
                 Para pemain harus melaju ke wilayah-wilayah tersembunyi dan belum dijamah, dari gurun nan gersang ke pegunungan bersalju, demi meloloskan 
                 diri dari permainan paling berbahaya di dunia.',
            ],
            [
                'id' => 4,
                'nama_film' => 'spiderman',
                'genre' => 'komedi',
                'deskripsi' => 'pria laba-laba',
            ],
            [
                'id' => 5,
                'nama_film' => 'twilight',
                'genre' => 'romance',
                'deskripsi' => 'vampir dan serigala',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
