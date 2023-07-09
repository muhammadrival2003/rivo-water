@extends('layouts.main_dashboard')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Varian</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($users as $user)
                  <tr>
                    <th scope="row">{{$counter}}</th>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->qty}}</td>
                    <td>{{$user->alamat}}</td>
                    <td>{{$user->varian}}</td>
                    <td></td>
                    {{$counter ++}}
                  </tr>
                  @empty
                    <div class="alert alert-danger">
                      Data User Belum Tersedia.
                    </div>
                  @endforelse
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
