<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\RouteServiceProvider;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Listing::all();

        return view('listings.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        Listing::create([
            'property_name' => $request->property_name,
            'location' => $request->location,
            'floor_area' => $request->floor_area,
            'rental_fee' => $request->rental_fee,
            'other_features' => $request->other_features
        ]);
        return redirect('/listings')->with('message', 'The listing has been posted!');
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
    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'property_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        $listing->update([
            'property_name' => $request->property_name,
            'location' => $request->location,
            'floor_area' => $request->floor_area,
            'rental_fee' => $request->rental_fee,
            'other_features' => $request->other_features
        ]);
        return redirect('/listings')->with('message', 'The listing has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->route('listings.index');
    }
}
