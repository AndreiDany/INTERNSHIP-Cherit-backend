<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "In ProductController";
    }

    // extragerea tuturor produselor si livrarea acestora 
    public function getAll(Request $request)
{

    return Product::all();
}
};
