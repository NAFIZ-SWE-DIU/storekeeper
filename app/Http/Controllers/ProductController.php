<?php

namespace App\Http\Controllers;

// app/Http/Controllers/ProductController.php

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

class ProductController extends Controller
{
    public function index()
    {
        // Your dashboard logic goes here
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation goes here

        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
        ]);

        // Update quantity logic goes here

        return redirect('/products')->with('success', 'Product created successfully');
    }

    public function showAll()
    {
        $products = Product::all();
        return view('products.showAll', ['products' => $products]);
    }

    public function salesDashboard()
    {
        // Sales figures dashboard logic goes here
    }

    public function salesHistory()
    {
        $sales = Sale::all();
        return view('sales.history', ['sales' => $sales]);
    }
}
