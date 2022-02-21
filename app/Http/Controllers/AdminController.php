<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class AdminController extends Controller
{
    public function home()
    {
        $products = Product::where('price', '<', 500000)->paginate(10);
        return view('index', compact('products'));
    }
    public function category($id)
    {
        $products = Product::join('product_types', 'products.product_type_id', '=', 'product_types.id')
            ->select(['products.*', 'product_types.type', 'product_types.title']);
        if ($id == 4) {
            $products = $products->where('price', '<', '500000');
        } else {
            $products = $products->where('product_type_id', $id);
        }
        $products = $products->paginate(16);
        // $title = "";
        foreach ($products as $product) {
            if ($id == 4) {
                $title = "Hộp quà tặng dưới 500K";
            } else {
                $title = $product->title;
            }
        }
        // dd($products);
        return view('Products.products', compact('products', 'title'));
    }
    public function show($id)
    {
        $products = Product::join('product_thumb', 'products.product_thumb_id', '=', 'product_thumb.id')
            ->select(['products.*', 'product_thumb.*']);
        $products = $products->where('product_thumb_id', $id)->get();

        // Cart::destroy();
        // Cart::remove('c42f6beec9c93fd6afea6eb0684aa99a');
        // $carts = Cart::content();
        // foreach( $carts as $data) {
        //     dd($data->name);

        // }
        return view('productDetail.productDetail', compact('products'));
    }
    public function product()
    {
        $products = Product::paginate(16);
        $title = "Tất cả sản phẩm";
        return view('Products.products', compact('products', 'title'));
    }
    public function intro()
    {
        return view('Intro.Intro');
    }
    public function contact()
    {
        return view('Contact.contact');
    }
    public function blog()
    {
        return view('Blog.Blog');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function cart()
    {
        return view('cart.cart');
    }
    public function addCart(Request $request)
    {
        // Cart::destroy();

        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $qty = $request->qty;
        $image = $request->image;
        $data = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'weight' => 12,
            'qty' => $qty,
            'options' => ['image' => $image]
        ];
        Cart::add($data);
        // $content = Cart::content();
        $html = view('layouts.partial.product-cart', compact('data'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }
    public function deleteCart(Request $request) {
        if( !empty($request->del_id)) {
            Cart::remove($request->del_id);
        }
        return response()->json(['success' => true]);
    }
}
