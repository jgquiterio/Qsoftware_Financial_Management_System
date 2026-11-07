<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'category' => 'required|string|max:100'
        ]);

        Transaction::create([
            ...$validated,
            'type' => 'expense',
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Despesa cadastrada com sucesso!');
    }

}
