<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Initialize the Variables
        $faker = Faker::create('id_ID');
        $product = new Product();

        for($i = 1; $i <= 300; $i++) {
            $category = Category::inRandomOrder()->first();
            $product->create([
                'nama_produk' => $faker->sentence(6, true),
                'kategori' => $category->id,
                'image' => $faker->imageUrl(1920, 1080),
            ]);
        }
    }
}
