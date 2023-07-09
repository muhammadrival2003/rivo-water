<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(): View
    {
        $counter = 1;

        # Untuk memanggil semua data di database tetapi diberi batasan 5
        // $users = Cart::latest()->paginate(5);

        $users = Cart::all();
        return view('Dashboard.user', compact('users', 'counter'));
    }
}
