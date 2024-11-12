<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Itinerary;

class ItineraryController extends Controller{
    public function showForm(){
        return view('Forms.itinerary-form');
    }

    public function submitForm(Request $request){
        
        $request->validate([
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'destination' => 'required|string',
            'accommodation' => 'nullable|string',
            'transport' => 'nullable|string',
        ]);

        Itinerary::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'destination' => $request->destination,
            'accommodation' => $request->accommodation,
            'transport' => $request->transport,
        ]);

        return redirect()->route('main-menu')->with('success', 'Itinerary submitted successfully!');
    }
}
