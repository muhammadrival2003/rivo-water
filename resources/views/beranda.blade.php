@extends('layouts.main')

@section('container')
{{-- Headline for Mobile --}}
<div class="d-md-none">
    <h1 class="text-center">Selamat datang di <br> <span>Rivo Water</span></h1>
</div>
{{-- End Headline for Mobile --}}
{{-- Headline for Laptop --}}
<div class="d-none d-md-block">
    <h1>Selamat datang di <br> Rivo <span>Water</span></h1>
</div>
{{-- End Headline for Laptop --}}


{{-- Image for Mobile --}}
<div class="row d-md-none mx-3">
    <div id="carouselExampleDark" class="carousel carousel-light slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/{{ $image }}" class="d-block w-100 rounded-2" alt="...">
                <div class="carousel-caption">
                    <h5>Normal Water</h5>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/{{ $image }}" class="d-block w-100 rounded-2" alt="...">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/{{ $image }}" class="d-block w-100 rounded-2" alt="...">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
{{-- End Image for Mobile --}}


{{-- Image for Laptop --}}
<div class="d-none d-md-block">
    <div class="row imgHeader mt-4">
        <div class="col-sm-4 col">
            <img src="img/{{ $image }}" class="img-fluid rounded-2 shadow" height="350" width="350" alt="">
            {{-- <h6 class="text-center">Normal Water</h6> --}}
        </div>
        <div class="col-sm-4 col">
            <img src="img/{{ $image }}" class="img-fluid rounded-2 shadow" height="350" width="350" alt="">
            {{-- <h6 class="text-center">Reverse Osmosis</h6> --}}
        </div>
        <div class="col-sm-4 col">
            <img src="img/{{ $image }}" class="img-fluid rounded-2 shadow" height="350" width="350" alt="">
            {{-- <h6 class="text-center">Bio Pure</h6> --}}
        </div>
    </div>
</div>
{{-- End Image for Laptop --}}


{{-- Button Beli sekarang --}}
<div class="row mt-5">
    <div class="col-lg-4 d-flex justify-content-lg-start justify-content-center">
        {{-- <a class="btnHeader btn btn-primary me-3 px-3 py-2 rounded-3 {{ ($title === 'Blog' ? 'active' : '') }}"
            href="/blog">Beli Sekarang</a> --}}
        <a class="btnHeader1 btn border border-secondary px-3 py-2 rounded-3 {{ ($title === 'Blog' ? 'active' : '') }}"
            href="/blog"><i class="bi bi-bag"></i> Beli Sekarang</a>
    </div>
</div>
{{-- End Button Beli sekarang --}}


{{-- Tentang Produk --}}
<div class="tentang-produk row mx-lg-0 mx-4" style="font-family: 'Poppins', sans-serif">
    <h2 class="headline-tentang text-center"><span>Tentang</span> Produk</h2>
    <div class="col mt-5">
        <div class="card mb-3" style="max-width: 940px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/{{$image}}" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Normal Water</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        --}}
                        <a href="#" class="linkTentang">Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-5 d-flex justify-content-end ">
            <div class="card" style="max-width: 940px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Reverse Osmosis</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.</p>
                            <a href="#" class="linkTentang">Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/{{$image}}" class="img-fluid rounded" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5" style="max-width: 940px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/{{$image}}" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Normal Water</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        --}}
                        <a href="#" class="linkTentang">Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End Tentang Produk --}}

    {{-- Produk --}}
    <div class="content-3-7 overflow container-xxl mx-auto position-relative"
        style="font-family: 'Poppins', sans-serif">
        <div class="container mx-auto">
            <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                <h2 class="title-text">Produk</h2>
                <p class="caption-text mx-auto">
                    Pilih sesuai dengan kebutuhan anda
                </p>
            </div>
            {{-- d-flex flex-lg-wrap overflow-x-auto --}}
            <div class="list-produk row">
                <div class="col-lg-4 col-12">
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                        <h2 class="price-title" style="color: #2e3a53;">Normal Water</h2>
                        <h2 class="price-value d-flex align-items-center">
                            <span>Rp 4.000</span>
                        </h2>
                        <p class="price-caption">
                            Suitable for those of you<br />
                            who are beginners
                        </p>
                        <img src="img/Pekerja_depot.png" class="img-fluid" alt="">
                        <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                            Gass Beli
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                        <h2 class="price-title" style="color: #2e3a53;">Reverse Osmosis</h2>
                        <h2 class="price-value d-flex align-items-center">
                            <span>Rp 5.000</span>
                        </h2>
                        <p class="price-caption">
                            Suitable for those of you<br />
                            who are beginners
                        </p>
                        <img src="img/Pekerja_depot.png" class="img-fluid" alt="">
                        <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                            Gass Beli
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-100"
                        style="background-color: #2e3a53">
                        <h2 class="price-title">Bio Pure</h2>
                        <h2 class="price-value d-flex align-items-center text-white">
                            <span>Rp 15.000</span>
                        </h2>
                        <p class="price-caption" style="color: #7987a6">
                            Suitable to make your<br />
                            company grow rapidly
                        </p>
                        <img src="img/Pekerja_depot.png" class="img-fluid" alt="">
                        <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                            Gass Beli
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Produk --}}

@endsection