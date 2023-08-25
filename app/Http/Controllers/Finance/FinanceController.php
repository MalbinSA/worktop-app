<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FinanceController extends Controller
{
    public function index(Request $request, $selectedYear = null)
    {
        $currentYear = $this->getCurrentYear($selectedYear);
        $transactions = $this->incomeTransactionsForYear($currentYear, $request);

        $transactionsByMonth = $transactions->groupBy(function ($transaction) {
            return Carbon::parse($transaction->date)->format('Y-m');
        });

        $CategoryTransactionsByMonth = $transactionsByMonth->map(function ($mothTransactions) {
            return $mothTransactions->groupBy('type')->map(function ($byCategory) {
                return $byCategory->groupBy('category_id');
            });
        });

        dd($CategoryTransactionsByMonth);

        return view('finance.show', compact('CategoryTransactionsByMonth', 'currentYear'));
    }

    private function getCurrentYear($selectedYear)
    {
        return isset($selectedYear) ? $selectedYear : date('Y');
    }

    private function incomeTransactionsForYear($currentYear, $request)
    {
        return Transaction::whereYear('date', $currentYear)
            ->orderBy('date')
            ->where('user_id', $request->user()->id)
            ->get();
    }
}
