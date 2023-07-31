@extends('dashboard_admin.layouts.app')
  
@section('title', 'Dashboard Admin')
  
@section('contents')
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif
  <div>
    <style>
      .break-line {
          white-space: pre-line;
      }
    </style>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Total UMKM</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataumkm }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section" id="profil">
      <h1>PROFIL DESA NIBUNG</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Profil Singkat</h6>
        </div>
        <div class="card-body">
          <p>{{ $dataprofil->profil_singkat }}</p>
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
        </div>
        <div class="card-body">
          <p>{{ $dataprofil->visi }}</p>
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
        </div>
        <div class="card-body">
          <p class="break-line">{{ $dataprofil->misi }}</p>
        </div>
      </div>
    </div>
    </div>
@endsection
