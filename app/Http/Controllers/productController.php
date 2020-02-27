<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Product::findOrFail($id);
        return view('products.product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('products.showProductList');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function addToCart($id)
    {
        $data = Product::find($id);
        if (!$data){
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id=>[
                    "productName" => $data->productName,
                    "quantity" => 1,
                    "price" => $data->price,
                    "description" => $data->description,
                    "images" => $data->images
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product add to cart');
        }

        if(isset($cart[$id])){

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product add to cart');
        }

        $cart[$id] = [
            "productName" => $data->productName,
            "quantity" => $data->quantity,
            "price" => $data->price,
            "description" => $data->description,
            "images" => $data->images
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product add to cart');

    }
}
