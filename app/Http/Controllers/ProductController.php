<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $club = Club::all();
        // dd($club);
        $clubName = Product::with('club')->get();
        return view('product.productlist',compact('clubName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $club = Club::all();
        return view('product.productdata')->with('club',$club);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        // dd($request->all());
        Product::create([
            "title"=>$request->title,
            "product_title"=>$request->product_title,
            "club_id"=>$request->club_id,
            "type"=>$request->type
        ]);
        return redirect()->route('product.index')->with('success','Product Add Successfully....');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
