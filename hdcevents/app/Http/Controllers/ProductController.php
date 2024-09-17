<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function products(){
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    public function product($id){
        return view('product', ['id' => $id]);
    }
}
