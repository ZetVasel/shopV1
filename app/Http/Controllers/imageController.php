<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class imageController extends Controller
{
    function showImage(){
        $img = DB::table('image')->get();
        return view('frontend.showImage', compact('img'));

    }
}
