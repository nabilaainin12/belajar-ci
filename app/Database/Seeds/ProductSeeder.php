<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Skintific',
                'harga'  => 10899000,
                'jumlah' => 5,
                'foto' => 'skintific.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Glad2glow',
                'harga'  => 150000,
                'jumlah' => 7,
                'foto' => 'glad2glow.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Whitelab',
                'harga'  => 250000,
                'jumlah' => 5,
                'foto' => 'whitelab.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Emina',
                'harga'  => 300000,
                'jumlah' => 7,
                'foto' => 'emina.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Hanasui',
                'harga'  => 150000,
                'jumlah' => 7,
                'foto' => 'hanasui.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Wardah',
                'harga'  => 200000,
                'jumlah' => 7,
                'foto' => 'wardah.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}
