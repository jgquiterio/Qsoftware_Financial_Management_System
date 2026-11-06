<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class IncomeController extends Controller
{
    public function create()
    {
        return view('incomes.create');
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
            'type' => 'income',
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Receita cadastrada com sucesso!');
    }
}
