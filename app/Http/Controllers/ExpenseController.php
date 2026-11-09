<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class ExpenseController extends Controller
{
    public function index()
    {
        $data = [
            'expenses' => Transaction::where('type', 'expense')
                ->orderBy('date', 'desc')
                ->get(),
        ];

        return view('expenses.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'expense' => Transaction::where('type', 'expense')
                ->findOrFail($id)
        ];

        return view('expenses.edit', $data);
    }

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

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'category' => 'required|string|max:100'
        ]);

        $expense = Transaction::where('type', 'expense')
            ->findOrFail($id);

        $expense->update($validated);

	return redirect()
            ->route('expenses.index')
            ->with('success', 'Despesa atualizada com sucesso');
    }

    public function destroy($id)
    {
        $expense = Transaction::where('type', 'expense')
            ->findOrFail($id);
        
        $expense->delete();

        return redirect()
            ->route('expenses.index')
            ->with('success', 'Despesa excluida com sucesso!');
    }

}
