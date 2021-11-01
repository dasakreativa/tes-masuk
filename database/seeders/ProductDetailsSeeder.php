<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Product();
        $details = new ProductDetails();
        $faker = Faker::create('id_ID');

        foreach($products->all() as $produk) {
            $details->create([
                'id_product' => $produk->id,
                'deskripsi_produk' => $faker->paragraph(6),
                'desk_singkat_produk' => $faker->sentence(3),
            ]);
        }
    }
}
