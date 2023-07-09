@extends('layouts.main')

@section('container')
<div class="container mt-4">
    <div class="row bg d-flex justify-content-center ">
        <div class="card card-cart mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/{{$image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="row">
                            <h2 class="card-title title-cart">Cart Produk</h2>
                            <h6>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message') }}
                                </div>               
                                @endif
                            </h6>
                        </div>
                        <form action="{{ route('carts.store') }}" method="POST">
                            @csrf
                            {{-- Laprtop --}}
                            <div class="d-none d-md-block">
                                <div class="row pricePostage">
                                    <div class="col-lg-6 col">
                                        <p class="textLine">Harga</p>
                                        <button type="button" class="btn btn-outline-secondary" disabled>Rp 4000 - 15.000</button>
                                    </div>
                                    <div class="col-lg-6 col">
                                        <p class="textLine">Ongkir</p>
                                        <button type="button" class="btn btn-outline-secondary" disabled>-</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 mb-3">
                                        <p class="textLine">Kuantitas</p>
                                        <div class="qty">
                                            <span class="minus">-</span>
                                            {{-- <input type="number" class="count" id="qty" name="kuantitas" value="1"> --}}
                                            <input id="qty" type="number" class="hitung @error('qty') is-invalid @enderror" name="qty" required autocomplete="qty" autofocus value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <p class="textLine">Pilih Air</p>
                                        <select class="form-control" id="cart-option" name="varian_id" aria-label="Default select example">
                                            <option selected>Pilih Varian Air</option>
                                            @foreach($varians as $varian)
                                                <option value="{{$varian->id}}">{{$varian->nama_varian}}, Rp {{$varian->harga}}</option>
                                            @endforeach
                                            {{-- <option value="2">Reverse Osmosis</option>
                                            <option value="3">Bio Pure</option> --}}
                                        </select>
                                    </div>
                                    <p class="textLine">Alamat</p>
                                    <textarea class="form-control inputAddress @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>

                                    @error('alamat')
                                        <div class="alert alert-danger" role="alert">
                                            {{-- {{$message}} --}}
                                            <p>Alamat tidak boleh kosong</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="row mt-3 ps-0">
                                    <div class="col-lg-6 ps-0">
                                        <button class="button-87" role="button" type="submit">Beli</button>
                                    </div>
                                    <div class="col-lg-6">
                                        @guest
                                            @if (Route::has('register'))
                                                <p>Atas Nama : -</p>
                                            @endif
                                            @else
                                                <p class="text-dark">Atas Nama : 
                                                    {{ Auth::user()->name }}
                                                    <input id="nama" type="text" class="nama" name="nama" value="{{ Auth::user()->name }}" >
                                                </p>
                                        @endguest
                                        <p class="textLine">Total : Rp 4.000</p>
                                    </div>
                                </div>
                            </div>
                            {{-- End Laptop --}}
                        </form>

                        {{-- Mobile --}}
                        <div class="d-md-none">
                            <div class="row">
                                <div class="col-6">
                                    <p class="textLine">Harga</p>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn price btn-secondary py-1 px-2" disabled>Rp 3.000</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="textLine">Ongkir</p>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn price btn-secondary py-1 px-2" disabled>-</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="textLine">Alamat</p>
                                </div>
                                <div class="col-6">
                                    <textarea class="form-control inputAddress" placeholder="Masukkan alamat" name="alamatforMobile" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3 ps-0">
                                <div class="col-lg-6 ps-0">
                                    <button class="button-87" role="button" type="submit">Beli</button>
                                </div>
                                <div class="col-lg-6">
                                    <p class="textLine">Total : Rp 4.000</p>
                                </div>
                            </div>
                        </div>
                        {{-- End Mobile --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
