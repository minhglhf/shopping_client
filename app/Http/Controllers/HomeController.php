<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class HomeController extends Controller
{
    private $slider;

    public function __construct(Slider $slider){
        $this->slider = $slider;
    }

    public function index()
    {
        $sliders = $this->slider->latest()->get();
        return view('home.home', compact('sliders'));
    }

    public function test()
    {
        return view('test');
    }
}
