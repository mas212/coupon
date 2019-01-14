<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\Categories;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	protected $limit = 10;
    public function index(Request $request)
    {    
        if (isset($request->kategori)) {
            $kategori = $request->kategori;
            $products = Product::whereIn('category_id', explode( ',', $kategori ))->get();
            response()->json($products);
            return view('frontend.home.listAjax', compact('products', 'categories'));
        } else {
            $categories = $this->getCategories();
            $cart = Cart::content();
            $products = Product::paginate($this->limit);
                return view('frontend.home.index', [
                'data' => $cart,
                'products' => $products,
                'categories' => $categories
            ]);      
        }
    }

    public function getCategories()
    {
        return Categories::all();
    }
}
