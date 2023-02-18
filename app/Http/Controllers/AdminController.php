<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function insert_product()
    {
        return view('admin.insert_product');
    }

    public function submit_product(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $image = $request->input('image');

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'qty' => $quantity,
            'price' => $price,
        ]);

        if (!empty($product)) {
            $request->session()->flash('success', 'Product added successfully.');
            return redirect()->route('admin');
        }
        return redirect()->route('insert_product');
    }
}
