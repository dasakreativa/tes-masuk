<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowProduct extends Controller
{
    function index() {
        $produk = new Product();
        $data = [
            'products' => $produk->paginate(10),
            'title'    => 'Indeks produk',
        ];
        return view('index', $data);
    }
}
