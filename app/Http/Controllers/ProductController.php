<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $products = Product::when($search, function ($query, $search) {
            $query->where('product_name', 'like', '%' . $search . '%');
        })->get();

        return view('pages.produk-ismi', compact('products', 'search'));
    }
}
