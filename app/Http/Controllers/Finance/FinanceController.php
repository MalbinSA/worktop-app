<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(Request $request)
    {
        $currentYear = 2001;

        $incomes = Transaction::select('category_id', \DB::raw('SUM(value) as category_sum'))
            ->where('type', 'income')
            ->where('user_id', $request->user()->id)
            ->whereYear('date', '>', $currentYear)
            ->groupBy('category_id')
            ->get();

        $expenses = Transaction::select('category_id', \DB::raw('SUM(value) as category_sum'))
            ->where('type', 'expense')
            ->where('user_id', $request->user()->id)
            ->whereYear('date', '>', $currentYear)
            ->groupBy('category_id')
            ->get();

//        $type = gettype($incomes);
//        dd($type);

        return view('finance/show', compact($incomes));
    }
}
