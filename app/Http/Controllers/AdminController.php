<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function insert_product()
    {
        $categories = Category::all();
        return view('admin.insert_product', ['categories' => $categories]);
    }

    public function submit_product(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $category = $request->input('category');
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'qty' => $quantity,
            'price' => $price,
            'image' => $imageName,
            'category_id' => $category,
        ]);

        if (!empty($product)) {
            $request->session()->flash('success', 'Product added successfully.');
            return redirect()->route('insert_product');
        }
        return redirect()->route('admin');
    }

    public function allproducts()
    {
        $products = Product::all();
        return view('admin.allproducts', ['products' => $products]);
    }

    public function edit_product($id)
    {
        if (Product::where('id', $id)->exists()) {

            $product = Product::find($id);
            $categories = Category::all();

            return view('admin.edit_product', [
                'product' => $product,
                'categories' => $categories
            ]);
        } else {
            return redirect('/')->with('id_not_found', 'product does not exist.');
        }
    }

    public function delete_product($id)
    {
        if (Product::where('id', $id)->exists()) {
            Product::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product delete successfully.');
        } else {
            return redirect('/')->with('id_not_found', 'product does not exist.');
        }
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name =  $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->qty = $request->get('quantity');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        } else {
            $product->image = $product['image'];
        }
        $product->save();

        return redirect()->to('allproducts')->with('success', 'Product updated successfully.');
    }

    public function getproductdata()

    {
        $productsUnder200 = Product::where('price', '<', 200)->count();
        $productsBetween200And600 = Product::where('price', '>', 200)->where('price', '<', 600)->count();
        $productsover600 = Product::where('price', '>', 600)->count();
        return response()->json([
            '_productsUnder200' => $productsUnder200,
            '_productsBetween200And600' => $productsBetween200And600,
            '_productsover600' => $productsover600,
        ]);
    }

    public function getproductsalerate()
    {
        $top5ProductNames  = Product::groupBy('products.id')
            ->orderByRaw('SUM(sales) DESC')
            ->take(8)
            ->pluck('name');

        $top5ProductSales = Product::groupBy('products.id')
            ->orderByRaw('SUM(sales) DESC')
            ->take(8)
            ->pluck('sales');

        return response()->json([
            'Products' => $top5ProductNames,
            'Top5ProductSales' => $top5ProductSales,
        ]);
    }
}
