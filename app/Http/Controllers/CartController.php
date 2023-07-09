<?php

namespace App\Http\Controllers;

use App\Models\Varian;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    # Validations
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $title = 'Cart';
        $image = 'Pekerja_depot.png';

        # Mengambil semuda data varian dialam database
        $varians = Varian::all();
        return view('cart', compact('varians', 'title', 'image'));

        // $varians = Varian::all();
        // return view('cart', [
        //     "varians" => $varians,
        //     "title" => "Cart",
        //     "image" => "Pekerja_depot.png"
        // ]);
    }

    public function create(): View
    {
        return view('cart');
    }

    public function store(Request $request): RedirectResponse
    {
        # Mengetes apakah data masuk atau tidak
        // dd($request->all());

        // $this->validate($request, [
        //     'nama' => 'required',
        //     'qty' => 'required',
        //     'alamat' => 'required|min:5',
        //     'varian' => 'required'
        // ]);

        Cart::create([
            'nama' => $request->nama,
            'qty' => $request->qty,
            'alamat' => $request->alamat,
            'varian' => $request->varian_id
        ]);        

        return redirect()->back()->with(['message' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $cart = Cart::findOrFail($id);

        //render view with post
        return view('cart', [
            "cart" => $cart,
        ]);
    }
}
