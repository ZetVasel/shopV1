<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
        public function search(Request $request)
        {
            $search = $request->get('search');
            $data = DB::table('product')->where('productName', 'like', '%'.$search.'%')->get();
            return view('search.search', compact('data'));
        }

        public function index($id){
            $data = Product::findOrFail($id);
            return view('products.product', compact('data'));
        }
}
