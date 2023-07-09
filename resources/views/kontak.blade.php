@extends('layouts.main')

@section('container')
<div class="container-fluid mt-5">
    {{-- Laptop --}}
    <div class="d-none d-lg-block">
        <div class="row kontak d-flex flex-row">
            <div class="col-lg-6 d-flex flex-row align-items-center text-white">
                <div class="textCTA">
                    <h1>01/</h1>
                </div>
                <div class="textCTA">
                    <h5>Sekali<br>Tekan</h5>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-row align-items-center text-white">
                <div class="textCTA">
                    <h1>02/</h1>
                </div>
                <div class="textCTA">
                    <h5>Kirim<br>Pesan</h5>
                </div>
            </div>
        </div>
        <div class="row kontak text-white">
            <div class="col-lg-6">
                <p>Pilih salah satu opsi dibawah ini.</p>
                <h4><i class="bi bi-whatsapp"></i> 082277737896</h4>
                <h4><i class="bi bi-envelope-fill"></i> saed@gmail.com</h4>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No.Telpon</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="No.Telpon">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" >Tulis Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulisa Masukkan"></textarea>
                </div>
                <button class="button-87" role="button">Kirim</button>
            </div>
        </div>
    </div>
    {{-- End Laptop --}}
    
    {{-- Mobile --}}
    <div class="d-lg-none">
        @include('kontakMobile1')
    </div>
    {{-- End Mobile --}}
</div>
@endsection
