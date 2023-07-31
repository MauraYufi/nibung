@extends('client.layouts.clientapp')
@section('contents')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Website</div>
            <div class="masthead-heading text-uppercase">DESA NIBUNG</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#profil_desa">Lebih lanjut</a>
        </div>
    </header>
    <!-- Profil Desa-->
    <section class="page-section" id="profil_desa">
        <div class="container w-75">
            <style>
                .break-line {
                    white-space: pre-line;
                }
            </style>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Desa</h2>                    
                <h3 class="section-subheading text-muted">Desa Nibung Kecamatan Puding Besar, Kabupaten Bangka, Kepulauan Bangka Belitung.</h3>
            </div>
            <div class="text-center">
                <div class="col-md-4 p-2">
                    <h4 class="my-3">Profil Singkat</h4>
                    <p class="text-muted">{{ $profil->profil_singkat }}</p>
                </div>
                <div class="col-md-4 p-2">
                    <h4 class="my-3">Visi</h4>
                    <p class="text-muted">{{ $profil->visi }}</p>
                </div>
                <div class="col-md-4 p-2">
                    <h4 class="my-3">Misi</h4>
                    <p class="text-muted break-line">{{ $profil->misi }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection