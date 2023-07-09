@extends('layouts.main_dashboard')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Beranda</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-5">
                <div class="row">

                    <!-- Penjualan Card -->
                    <div class="col-xxl-4 col-md-12">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Penjualan <span>| Hari Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$penjualan}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Penjualan Card -->

                    <!-- Pendapatan Card -->
                    <div class="col-xxl-4 col-md-12">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pendapatan <span>| Hari Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Rp 153.264</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Pendapatan Card -->

                    <!-- Pelanggan Card -->
                    <div class="col-xxl- col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                                    <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pelanggan <span>| Bulan Ini</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$pelanggan}}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Pelanggan Card -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-7">

                <!-- Aktivitas Terakhir -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Aktivitas Terakhir <span>| Hari Ini</span></h5>
                        <div class="activity">
                            <div class="activity-item d-flex">
                                <div class="activite-label">32 mnt</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Syahli Kurniawan :  <a href="#" class="fw-bold text-dark">Membeli Bio Pure dengan jumlah 5 buah</a>
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 mnt</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Musaed Hasanuddin :  <a href="#" class="fw-bold text-dark">Membeli Normal Water dengan jumlah 10 buah</a>
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 jam</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Syahli Kurniawan :  <a href="#" class="fw-bold text-dark">Membeli Bio Pure dengan jumlah 5 buah</a>
                                </div>
                            </div><!-- End activity item-->
                        </div>

                    </div>
                </div><!-- End Aktivitas Terakhir -->

                <!-- Traffic Penjualan -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                            <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                            <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Traffic Penjualan <span>| Hari Ini</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    }
                                    , legend: {
                                        top: '5%'
                                        , left: 'center'
                                    }
                                    , series: [{
                                        name: 'Access From'
                                        , type: 'pie'
                                        , radius: ['40%', '70%']
                                        , avoidLabelOverlap: false
                                        , label: {
                                            show: false
                                            , position: 'center'
                                        }
                                        , emphasis: {
                                            label: {
                                                show: true
                                                , fontSize: '18'
                                                , fontWeight: 'bold'
                                            }
                                        }
                                        , labelLine: {
                                            show: false
                                        }
                                        , data: [{
                                                value: 1048
                                                , name: 'Normal Water'
                                            }
                                            , {
                                                value: 735
                                                , name: 'Reverse Osmosis'
                                            }
                                            , {
                                                value: {{$penjualan}}
                                                , name: 'Bio Pure'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>
                    </div>
                </div><!-- End Traffic Penjualan -->
            </div><!-- End Right side columns -->
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
{{-- @include('partials.footer') --}}
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
