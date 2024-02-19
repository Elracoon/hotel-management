<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());
        return redirect()->route('hotels.index');
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->nom = $request->get('nom');
        $hotel->adresse = $request->get('adresse');
        $hotel->ville = $request->get('ville');
        $hotel->pays = $request->get('pays');
        $hotel->telephone = $request->get('telephone');
        $hotel->email = $request->get('email');
        $hotel->save();

        return redirect()->route('hotels.index');
    }

    public function destroy(Request $request)
    {
        $hotel = Hotel::find($request->get('id'));
        $hotel->delete();

        return redirect()->route('hotels.index');
    }
}
