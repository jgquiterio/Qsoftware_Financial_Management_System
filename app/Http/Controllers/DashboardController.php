<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
   public function index()
   {
      $totalIncome = Transaction::where('type', 'income')
         ->sum('amount');

      $totalExpense = Transaction::where('type', 'expense')
         ->sum('amount');

      $balance = $totalIncome - $totalExpense;

      return view('dashboard', compact(
         'totalIncome',
         'totalExpense',
         'balance'
      ));
   }
}
