<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Product;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class clubAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data = Club::all();
        if ($request->ajax()) {
            $data = Club::orderBy('id', 'DESC')->get();
            $view = View::make('Ajax.table', compact('data'))->render();
            return response()->json($view);
        }
        return view('Ajax.AjaxCrud');
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
    public function store(Request $request)
    {
        try {

            $file1 = date('YmdHi').''.$request->file('club_logo')->getClientOriginalExtension();
            // return response($file1);
            $request->club_logo->move(public_path('images/logo'), $file1);
            $file2 = date('YmdHi').''.$request->file('club_banner')->getClientOriginalExtension();
            $request->club_banner->move(public_path('images/banner'), $file2);
            Club::create([
                "group_id" => $request->group_id,
                "business_name" => $request->business_name,
                "club_number" => $request->club_number,
                "club_name" => $request->club_name,
                "club_state" => $request->club_state,
                "club_desciption" => $request->club_desciption,
                "club_slug" => $request->club_slug,
                "website_title" => $request->website_title,
                "website_link" => $request->website_link,
                "club_logo" => $file1,
                "club_banner" => $file2,
            ]);
            return response(
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $club = Club::find($id);

        if (file_exists(public_path('images/logo/' . $club->club_logo))) {

            unlink(public_path('images/logo/' . $club->club_logo));
        }
        if (file_exists(public_path('images/banner/' . $club->club_banner))) {

            unlink(public_path('images/banner/' . $club->club_banner));
        }
        if ($club) {
            return response()->json(
                [
                    'success' => true,
                    'club' => $club
                ]
            );
        } else {
            return response()->json([
                'success' => true,
                'club' => "No club Found"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $file1 = date('YmdHi').''.$request->file('club_logo')->getClientOriginalName();
            $file2 = date('YmdHi').''.$request->file('club_banner')->getClientOriginalName();
            $logopath =  $request->club_logo->move(public_path('images/logo'), $file1);
            $bannerpath = $request->club_banner->move(public_path('images/banner'), $file2);
            $club = Club::find($id);
            $club->update($request->input());
            $club->update([
                "club_logo" => $file1,
                "club_banner" => $file2,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data Update successfully'
            ]);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $club = Club::find($id);
            $product = Product::where('club_id', $id)->delete();
            if (file_exists(public_path('images/logo/' . $club->club_logo))) {

                unlink(public_path('images/logo/' . $club->club_logo));
            }
            if (file_exists(public_path('images/banner/' . $club->club_banner))) {

                unlink(public_path('images/banner/' . $club->club_banner));
            }
            $club->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data Delete Successfully'
            ]);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }
}
