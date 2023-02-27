<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favourite;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;

class AppController extends Controller
{

    public function home()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        return view('home', ['products' => $products, 'categories' => $categories]);
    }


    public function shop(Request $request)
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        $category = $request->input('category') ?? $request->segment(2);
        $sortBy = $request->input('sortBy');

        switch ($sortBy) {
            case '200_400':
                $products = Product::with('category')->where('price', '>', 200)->where('price', '<', 400)->get();
                return view('shop', ['products' => $products, 'categories' => $categories]);
                break;
            case '0_200':
                $products = Product::with('category')->where('price', '>', 0)->where('price', '<', 200)->get();
                return view('shop', ['products' => $products, 'categories' => $categories]);
                break;

            case '600+':
                $products = Product::with('category')->where('price', '>', 600)->get();
                return view('shop', ['products' => $products, 'categories' => $categories]);
                break;
            default:

                break;
        }

        if ($category) {
            $products = Product::with('category')->where('category_id', $category)->get();
            return view('shop', ['products' => $products, 'categories' => $categories]);
        }

        if ($request->method() == 'POST') {
            $search_query = $request->input('query');
            $products = Product::with('category')->where('name', 'like', '%' . $search_query . '%')
                ->get();
            return view('shop', ['products' => $products, 'categories' => $categories]);
        }

        return view('shop', ['products' => $products, 'categories' => $categories]);
    }

    public function wishlist()
    {
        $user_id = auth()->user()->id;
        $favourites = Favourite::with('product')->where('user_id', $user_id)->get();

        if (count($favourites) == 0) {
            $message = 'No products added to the wishlist';
        }
        return view('wishlist', [
            'favourites' => $favourites,
            'message' => $message ?? "",
        ]);
    }

    public function cart()
    {
        $user_id = auth()->user()->id;

        $cart = Cart::with('product')->where('user_id', $user_id)->get();

        $total = $cart->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('cart', ['cart' => $cart, 'total' => $total]);
    }

    public function removeCartItem($id)
    {
        Cart::where('id', $id)->delete();
        return response()->json(['message' => 'Removed From Cart!']);
    }

    public function add_favourite(Product $product)
    {
        $user_id = auth()->user()->id;
        if (auth()->user()->hasFavourited($product)) {
            auth()->user()->removeFavourite($product);
            return response()->json(['message' => 'Removed from favourites.']);
        }
        auth()->user()->addFavourite($product, $user_id);
        return response()->json(['message' => 'Added to favourites!']);
    }

    public function add_to_cart(Product $product)
    {
        $user_id = auth()->user()->id;

        $cart = new Cart();

        $cart->user_id = $user_id;
        $cart->product_id = $product->id;
        $cart->quantity = 1;
        $cart->price = $product->price;
        $cart->save();

        return response()->json(['message' => 'Added to Cart!']);
    }

    public function update_cart($cart_id, $quantity)
    {
        $cart = Cart::find($cart_id);

        $cart->quantity = $quantity;
        $cart->save();

        return response()->json(['message' => 'success!']);
    }

    public function checkout()
    {
        $user_id = auth()->user()->id;

        $cart = Cart::with('product')->where('user_id', $user_id)->get();

        $total = $cart->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('checkout', ['cart' => $cart, 'total' => $total]);
    }

    public function submit_order(Request $request)
    {

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'telephone' => 'required',
        ]);

        $user_id = auth()->user()->id;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $telephone = $request->input('telephone');
        $shipping = $request->input('shipping');
        $total = $request->input('total');
        if (!$shipping == 0) {
            $total += $shipping;
        }
        $order = Order::create([
            'user_id' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'telephone' => $telephone,
            'shipping' => $shipping,
            'total' => $total,
        ]);

        $cart = Cart::with('product')->where('user_id', $user_id)->get()->toArray();

        // dd($cart);
        foreach ($cart as $cartItem) {
            $product = Product::where('id', $cartItem['product_id'])->first();
            OrderItem::create([
                'order_id' => $order['id'],
                'product_id' => $cartItem['product_id'],
                'price' => $cartItem['price'],
                'quantity' => $cartItem['quantity'],
            ]);
            $product['sales'] += $cartItem['quantity'];
            $product->save();
        }

        Cart::where('user_id', $user_id)->delete();

        $request->session()->flash('success', 'Your order has been placed.');
        return redirect()->route('checkout');
    }

    public function orders()
    {
        $user_id = auth()->user()->id;

        $orders = Order::with('item')->where('user_id', $user_id)->get();
        return view('orders', ['orders' => $orders]);
    }

    public function order_details($id)
    {
        $order_details = OrderItem::with('product')->with('order')->where('order_id', $id)->get()->toArray();
        return view('order_details', ['order_details' => $order_details]);
    }

    public function product_details($id)
    {
        $product = Product::with('category')->where('id', $id)->first();

        return view('details', ['product' => $product]);
    }
}
