<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $slider;
    private $category;
    private $product;

    public function __construct(Slider $slider, Category $category, Product $product)
    {
        $this->slider = $slider;
        $this->category = $category;
        $this->product = $product;
    }

    public function index($slug, $categoryId){
        $categories = $this->category->where('parent_id', 0)->get();
        $products = $this->product->where('category_id', $categoryId)->paginate(12);
        return view ('product.category.list', compact('categories', 'products'));
    }
}
