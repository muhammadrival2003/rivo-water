<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DashboardController extends Controller
{
    public function index(): View
    {
        $pelanggan = Cart::count();
        $penjualan = Cart::sum('qty');
        // $traffic_penjualan = Cart::where('varian', '3')->sum('');
        return View('Dashboard.dashboard', compact('pelanggan', 'penjualan'));
    }
}
