<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class HomeController extends Controller
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

    public function index()
    {
        $sliders = $this->slider->latest()->get();
        $categories = $this->category->where('parent_id', 0)->get();
        $categoriesTab = $this->category->all();
        $products = $this->product->latest()->take(8)->get();



        return view('home.home', compact('sliders', 'categories', 'products','categoriesTab'));
    }


}
