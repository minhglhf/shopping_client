<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use App\Slider;
use Illuminate\Http\Request;

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

    public function index($id){


        $categories = $this->category->where('parent_id', 0)->get();
        $productItem = $this->product->where('id', $id)->first();
        $productImages = $this->productImage->where('product_id', $id)->get();

        return view('product.product_detail.product_detail',compact('categories', 'productItem', 'productImages'));
    }
}
