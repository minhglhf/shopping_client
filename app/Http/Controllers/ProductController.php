<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use App\Slider;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    private $slider;
    private $category;
    private $product;
    private $productImage;

    public function __construct(Slider $slider, Category $category, Product $product, ProductImage $productImage)
    {
        $this->slider = $slider;
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
    }

    public function index($id)
    {


        $categories = $this->category->where('parent_id', 0)->get();
        $productItem = $this->product->where('id', $id)->first();
        $productImages = $this->productImage->where('product_id', $id)->get();

        return view('product.product_detail.product_detail', compact('categories', 'productItem', 'productImages'));
    }

    public function addToCart($id)
    {

        $product = $this->product->find($id);

        $priceInt = str_replace(".", "", $product->price);

        $cart = Session::get('cart');
        if (isset($cart[$id])) {

            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $priceInt,
                'quantity' => 1,
                'feature_image_path' => $product->feature_image_path,
            ];
        }
        Session::put('cart', $cart);
    //    Session::save();

        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }

    public function clearCart()
    {
        Session::forget('cart');
        Session::flush();

        if (session()->has('cart')) {
            echo 'dcmm';
        }

    }

    public function showCart()
    {

//        echo '<pre>';
//        print_r(dd(Session::get('cart')));
        $carts = Session::get('cart');
        return view('product.product_detail.cart', compact('carts'));
    }

    public function updateCart(Request $request){

        if($request->id && $request->quantity){
            $carts = Session::get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            Session::put('cart', $carts);
            $carts = Session::get('cart');


            try {
                $cartComponent = view('product.product_detail.components.cart_component', compact('carts'))->render();
            } catch (\Throwable $e) {
            }
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200

            ], 200);
        }
    }

    public function deleteCart(Request $request){
        if($request->id){
            $carts = Session::get('cart');
            unset($carts[$request->id]);
            Session::put('cart', $carts);
            $carts = Session::get('cart');

            try {
                $cartComponent = view('product.product_detail.components.cart_component', compact('carts'))->render();
            } catch (\Throwable $e) {
            }
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200

            ], 200);
        }
    }

}

