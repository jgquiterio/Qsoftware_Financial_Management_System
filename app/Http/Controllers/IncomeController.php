<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class IncomeController extends Controller
{
    public function index()
    {
        $data = [
            'incomes' => Transaction::where('type', 'income')
                ->orderBy('date', 'desc')
                ->get(),
        ];

        return view('incomes.index', $data);
    }

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

    public function edit($id)
    {
        $data = [
            'income' => Transaction::where('type', 'income')
                ->findOrFail($id),
        ];

        return view('incomes.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'category' => 'required|string|max:100'
        ]);

        $income = Transaction::where('type', 'income')
            ->findOrFail($id);

        $income->update($validated);

        return redirect()
            ->route('incomes.index')
            ->with('success', 'Receita atualizada com sucesso');
    }

    public function destroy($id)
    {
        $income = Transaction::where('type', 'income')
            ->findOrFail($id);

        $income->delete();

        return redirect()
            ->route('incomes.index')
            ->with('success', 'Receita excluida com sucesso');
    }

}
