<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PerformanceEvaluation;

class PerformanceEvaluationController extends Controller{
    public function showForm(){
        return view('Forms.performance-evaluation-form');
    }

    public function submitForm(Request $request){
        $request->validate([
            'employee_name' => 'required|string',
            'evaluation_date' => 'required|date',
            'rating' => 'required|numeric|between:1,5',
            'comments' => 'nullable|string',
        ]);
    
        PerformanceEvaluation::create([
            'employee_name' => $request->employee_name,
            'evaluation_date' => $request->evaluation_date,
            'rating' => $request->rating,
            'comments' => $request->comments,
        ]);
    
        return redirect()->route('main-menu')->with('success', 'Performance evaluation submitted!');
    }
}
