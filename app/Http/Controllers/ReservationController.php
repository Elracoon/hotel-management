<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function index()
    {
        $chambres = Chambre::all();
        return view("reservation", ["chambres"=>$chambres]);
    }

    public function create($id)
    {
        $chambres = Chambre::find($id);
        return view('reservations.create', compact('chambres'));
    }

    public function store(Request $request, $id)
    {
        $reservation = Reservation::create($request->all());

        if ($reservation->chambre_id) {
            $chambre = Chambre::find($reservation->chambre_id);
            if ($chambre) {
                $chambre->update(['is_reserved' => true]);
            }
        }
        return redirect()->route('reservations.index');
    }
}
