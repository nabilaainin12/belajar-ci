<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $this->db->table('product_categories')->truncate();

        $data = [
            [
                'name' => 'Skintific',
                'slug' => 'skintific',
                'description' => 'All skintific products',
                'parent_id' => null,
                'is_active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Glad2glow',
                'slug' => 'glad2glow',
                'description' => 'All Glad2glow product',
                'parent_id' => 1, 
                'is_active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Whitelab',
                'slug' => 'whitelab',
                'description' => 'All whitelab product',
                'parent_id' => 1, 
                'is_active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Keyboards',
                'slug' => 'keyboards',
                'description' => 'Computer keyboards',
                'parent_id' => 1, 
                'is_active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'All laptop product',
                'parent_id' => null, 
                'is_active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
 
        ];

        // Gunakan ignore(true) untuk melewati error duplikat (jika ada)
        $this->db->table('product_categories')->ignore(true)->insertBatch($data);
    }
}