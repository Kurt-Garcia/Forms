<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Attendance;

class AttendanceController extends Controller{
    public function showForm()
    {
        return view('Forms.attendance-form');
    }

    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'reason' => 'nullable|string',
        ]);

        Attendance::create([
            'name' => $request->name,
            'date' => $request->date,
            'reason' => $request->reason,
        ]);

        return redirect()->route('main-menu')->with('success', 'Attendance recorded successfully!');
    }
}
