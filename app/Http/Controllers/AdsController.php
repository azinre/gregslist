<?php

namespace App\Http\Controllers;

use App\Models\ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ads::all();
        return response()->json($ads, 200);

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
    public function store()
    {
        $ads = new Ads;
        $ads->title = request('title');
        $ads->description = request('description');
        $ads->amount = request('amount');
        $ads->email = request('email');
        $ads->save();

        return response()->json($ads, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ads = Ads::find($id);
        return response()->json($ads, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ads $ads)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $ads = Ads::find($id);
        $ads->title = request('title');
        $ads->description = request('description');
        $ads->amount = request('amount');
        $ads->email = request('email');
        $ads->save();

        return response()->json($ads, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ads = Ads::find($id);
        $ads->delete();
      
        return response()->json($ads, 200);
      
    }
}
