<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalStock = Product::sum('stock');
        $lowStockProducts = Product::where('stock', '<', 10)->get();
        $recentTransactions = Transaction::with('product')->latest()->take(5)->get();

        $totalIn = Transaction::where('type', 'in')->sum('quantity');
        $totalOut = Transaction::where('type', 'out')->sum('quantity');

        return view('dashboard', compact(
            'totalProducts',
            'totalStock',
            'lowStockProducts',
            'recentTransactions',
            'totalIn',
            'totalOut'
        ));
    }
}
