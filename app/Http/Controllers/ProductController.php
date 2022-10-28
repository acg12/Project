<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts() {
        // select all
        // return ke view nya

        $data = Product::all();
        $search_query = null;
        return view('products', compact('data', 'search_query'));
    }

    public function search(Request $req) {
        $search_query = $req->query('search');
        $data = Product::query()
            ->where('name', 'LIKE', "%$search_query%")
            ->paginate(9)->appends(['search' => $search_query]);
        return view('products', compact('data', 'search_query'));
    }
}
