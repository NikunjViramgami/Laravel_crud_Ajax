<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $club = Club::all();
        return view('clublist',compact('club'));
        // return redirect()->route('club.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clubData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('hello')
        $file1 = $request->file('club_logo')->getClientOriginalName();
        $request->club_logo->move(public_path('images/logo'), $file1);
        $file2 = $request->file('club_banner')->getClientOriginalName();
        $request->club_banner->move(public_path('images/banner'), $file2);
        Club::create([
            "group_id" => $request->group_id,
            "business_name" =>$request->business_name,
            "club_number" =>$request->club_number,
            "club_name" =>$request->club_name,
            "club_state" =>$request->club_state,
            "club_desciption"=>$request->club_desciption,
            "club_slug"=>$request->club_slug,
            "website_title"=>$request->website_title,
            "website_link"=>$request->website_link,
            "club_logo"=>$file1,
            "club_banner"=>$file2,
        ]);

     

        return redirect()->route('club.index')->with('status',"Club Add Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $club = Club::find($id);
        return view('showlist',compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        //
    }
}
