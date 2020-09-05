<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class HomeController extends Controller
{
    private $slider;
    private $category;

    public function __construct(Slider $slider, Category $category)
    {
        $this->slider = $slider;
        $this->category = $category;
    }

    public function index()
    {
        $sliders = $this->slider->latest()->get();
        $categories = $this->category->where('parent_id', 0)->get();
//        $categoriesChildren = [];
//        foreach($categories as $item){
//            $categoriesChildren[] = $this->category->where('parent_id', $item->id)->get();
//        }

        return view('home.home', compact('sliders', 'categories'));
    }

    public function test()
    {
        return view('test');
    }
}
