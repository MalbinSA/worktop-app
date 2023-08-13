<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(Request $request)
    {
        $income = Transaction::select('category_id', \DB::raw('SUM(value) as category_sum'))
            ->where('type', 'income')
            ->where('user_id', $request->user()->id)
            ->whereYear('date', $currentYear)
            ->groupBy('category_id')
            ->get();
        dd($income);
        $expense = Transaction::where('type', 'expense')->get();

        dd($income);

        return view('finance/show');
    }
}
