@extends('dashboard_admin.layouts.app')
   
@section('contents')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data UMKM Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('umkms.index') }}"> Kembali</a>
        </div>
    </div>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada kesalahan dalam input data.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('umkms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <textarea name="name" class="form-control" placeholder="Nama"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sektor:</strong>
                <select class="form-control" name="sector" placeholder="Sektor">
                    <option>INFORMASI DAN KOMUNIKASI</option>
                    <option>PERDAGANGAN BESAR DAN ECERAN, REPALASI MOBIL DAN SEPEDA MOTOR</option>
                    <option>KONSTRUKSI</option>
                    <option>PENYEDIAAN AKOMODASI DAN MAKAN MINUM</option>
                    <option>PERTANIAN, KEHUTANAN, PETERNAKAN DAN PERIKANAN</option>
                    <option>INDUSTRI PENGOLAHAN</option>
                    <option>JASA LAINNYA</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Handphone:</strong>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                    <input type="number" name="telp" class="form-control" placeholder="Nomor Handphone" aria-label="telp" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
      
</form>
@endsection