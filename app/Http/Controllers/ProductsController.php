<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function babyKid (){
        return view('products.babyKid');
    }

    public function beautyHealth (){
        return view('products.beautyHealth');
    
    }

    public function foodBeverage(){
        return view('products.foodBeverage');
    }

    public function homeCare(){
        return view('products.homeCare');
    }
}
