@extends('layouts.main')

@section('container')
<div class="row px-5 d-flex flex-row">
    <div class="col-12 d-flex flex-row align-items-center text-white">
        <div class="textCTA">
            <h1>02/</h1>
        </div>
        <div class="textCTA">
            <h5>Kirim<br>Pesan</h5>
        </div>
    </div>
    <div class="col-12 text-white">
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
            <label for="exampleFormControlTextarea1" class="form-label">Tulis Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Masukkan..."></textarea>
        </div>
        <button class="button-87" role="button">Kirim</button>
    </div>
    <div class="col-12 buttonKe01 d-flex justify-content-end">
        <a href="/kontak" class="btn button-88" role="button" aria-disabled="true">Opsi ke-1</a>
    </div>
</div>
@endsection