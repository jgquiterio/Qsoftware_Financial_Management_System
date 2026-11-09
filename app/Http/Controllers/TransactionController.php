<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $data = [
            'transactions' => Transaction::orderBy('date', 'desc')->get(),
        ];

	return view('transactions.index', $data);
    }

    public function show($id)
    {
        $data = [
            'transaction' => Transaction::findOrFail($id),
        ];

        return view('transactions.show', $data);
    }

}
