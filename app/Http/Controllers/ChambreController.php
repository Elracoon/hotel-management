<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class ChambreController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();
        return view('chambre', compact('chambres'));
    }

    public function create()
    {
        return view('chambres.create');
    }

    public function store(Request $request)
    {
        $chambre = Chambre::create($request->all());
        return redirect()->route('chambres.index');
    }

    public function edit($id)
    {
        $chambre = Chambre::find($id);
        return view('chambres.edit', compact('chambre'));
    }

    public function update(Request $request, $id)
    {
        $chambre = Chambre::find($id);
        $chambre->prix = $request->get('prix');
        $chambre->capacite = $request->get('capacite');
        $chambre->etage = $request->get('etage');
        $chambre->hotel_id = $request->get('hotel_id');
        $chambre->save();

        return redirect()->route('chambres.index');
    }

    public function destroy(Request $request)
    {
        $chambre = Chambre::find($request->get('id'));
        $chambre->delete();

        return redirect()->route('chambres.index');
    }
}
