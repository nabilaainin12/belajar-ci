<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
     public function run()
    {
        $this->db->table('product_categories')->truncate();

        $data = [
            [
                'tanggal' => '2025-06-25',
                'nominal' => '10000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-06-26',
                'nominal' => '20000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-06-27',
                'nominal' => '300000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-06-28',
                'nominal' => '10000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-06-29',
                'nominal' => '20000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-06-30',
                'nominal' => '30000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-07-01',
                'nominal' => '10000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-07-02',
                'nominal' => '20000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-07-03',
                'nominal' => '30000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tanggal' => '2025-07-04',
                'nominal' => '10000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
 
        ];

        // Gunakan ignore(true) untuk melewati error duplikat (jika ada)
        $this->db->table('diskon')->ignore(true)->insertBatch($data);
    }
}
