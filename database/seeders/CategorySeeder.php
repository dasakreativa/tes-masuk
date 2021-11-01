<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->create([
            'cat_name' => 'Baju',
            'cat_desc' => 'Produk baju',
        ]);
        $category->create([
            'cat_name' => 'Jas',
            'cat_desc' => 'Produk Jas',
        ]);
        $category->create([
            'cat_name' => 'Jaket',
            'cat_desc' => 'Produk Jaket',
        ]);
    }
}
