<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExpenseReimbursement;

class ExpenseReimbursementController extends Controller{
    public function showForm()
    {
        return view('Forms.expense-reimbursement-form');
    }

    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'category' => 'required|string',
            'receipt' => 'nullable|file|mimes:jpg,png,pdf',
        ]);

        $path = $request->file('receipt') ? $request->file('receipt')->store('receipts') : null;

        ExpenseReimbursement::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'category' => $request->category,
            'receipt' => $path,
        ]);

        return redirect()->route('main-menu')->with('success', 'Expense Reimbursement Request Submitted!');
    }
}
