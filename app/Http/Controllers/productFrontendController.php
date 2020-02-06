<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class productFrontendController extends Controller
{
    function show(){
        $t = Product::inRandomOrder()->take(3)->get();
        $data = DB::table('product')->paginate(5);
        $recital = DB::table('recital')->get();
        return view('frontend.show', compact('data', 'recital', 't'));
    }
}
