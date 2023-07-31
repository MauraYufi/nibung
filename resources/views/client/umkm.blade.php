@extends('client.layouts.clientapp')

@section('contents')
<header>
    <div class="p-3 mb-2 bg-dark text-white" style="height: 118px"></div>
</header>
<section class="page-section" id="infografis">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">List UMKM</h2>                    
        </div>
        <div class="text-center">
            @component('client.components.umkmcard', ['title' => $umkms, 'data' => $umkms])
            @endcomponent
        </div>
    </div>
</section>
@endsection