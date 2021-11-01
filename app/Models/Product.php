<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * To Delete Error When Inserting Data
     */
    protected $guarded = [];

    /**
     * Relating data to category
     */
    public function getCategory() {
        $category = new Category();
        return $this->hasMany($category, 'id', 'kategori');
    }

    /**
     * Relating data to product_details
     */
    public function getDetail() {
        $detail = new ProductDetails();
        return $this->hasMany($detail, 'id_product', 'id');
    }
}
