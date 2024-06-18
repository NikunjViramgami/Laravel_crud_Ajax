<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Models\Club;
use App\Models\Product;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class productAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $product = Product::orderBy('created_at','DESC')->get();
           
            $clubName = Product::with('club')->orderBy('id','DESC')->get();
            // return response($clubName);
            $viewData = View::make('product.table', compact('clubName'))->render();
            return response()->json($viewData);
        }
        $club = Club::all();
        return view('product.AjaxProduct', compact('club'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productRequest $request)
    {
        try {
            Product::create([
                "title" => $request->title,
                "product_title" => $request->product_title,
                "club_id" => $request->club_id,
                "type" => $request->type
            ]);
            return response()->json(
                [
                    "success" => true,
                    "message" => "Item Add Successfully"
                ]
            );
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json(
                [
                    "success" => 'successful',
                    'product' => $product
                ]
            );
        } else {
            return response()->json(
                [
                    'success' => "successfull",
                    'club' => "No club Found"
                ]
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $product = Product::find($id);
            // dd($request->input());
            $product->update($request->input());
            return response()->json([
                'success'=>true,
                "message"=>'Product Updated Successfully'
            ]);

        }
        catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $product = Product::find($id);
            $product->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Product Deleted Successfully'
            ]);
        }
        catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }
}
