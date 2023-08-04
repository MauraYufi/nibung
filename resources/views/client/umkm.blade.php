@extends('client.layouts.clientapp')

@section('contents')
<header>
    <div class="p-3 mb-2 bg-dark text-white" style="height: 118px"></div>
</header>
<body>
    <div class="container">
        <div class="text-center mt-3 mb-3">
            <h2 class="section-heading text-uppercase">List UMKM Desa Nibung</h2>                    
        </div>
        <form action="{{ route('umkm.search') }}" method="GET">
            <div class="input-group mb-4 justify-content-center">
                <div class="form-outline">
                    <input type="text" name="search" placeholder="Cari berdasarkan nama atau sektor" class="form-control" style="width: 300px;"/>
                </div>
                <button type="submit" class="btn btn-primary" style="border: 2px solid white;">
                    <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-primary" href="{{ route('umkm.reset') }}" style="border: 2px solid white;">Reset</button>
            </div>
        </form>
        <div class="text-center d-flex flex-wrap justify-content-center">
            @if ($umkms->isEmpty())
                <p>Tidak ditemukan data yang sesuai.</p>
            @else
                @component('client.components.umkmcard', ['title' => $umkms, 'data' => $umkms])
                @endcomponent
            @endif
        </div>
    </div>
</body>
@endsection