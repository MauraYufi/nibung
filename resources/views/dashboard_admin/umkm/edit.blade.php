@extends('dashboard_admin.layouts.app')
  
@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah Data UMKM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('umkms.index') }}"> Kembali </a>
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
     
    <form action="{{ route('umkms.update',$umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <textarea name="name" value="" class="form-control" placeholder="Nama">{{ $umkm->name }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sektor:</strong>
                    <select class="form-control" name="sector">
                        <option {{ $umkm->sector == 'INFORMASI DAN KOMUNIKASI' ? 'selected' : '' }}>INFORMASI DAN KOMUNIKASI</option>
                        <option {{ $umkm->sector == 'PERDAGANGAN BESAR DAN ECERAN, REPALASI MOBIL DAN SEPEDA MOTOR' ? 'selected' : '' }}>PERDAGANGAN BESAR DAN ECERAN, REPALASI MOBIL DAN SEPEDA MOTOR</option>
                        <option {{ $umkm->sector == 'KONSTRUKSI' ? 'selected' : '' }}>KONSTRUKSI</option>
                        <option {{ $umkm->sector == 'PENYEDIAAN AKOMODASI DAN MAKAN MINUM' ? 'selected' : '' }}>PENYEDIAAN AKOMODASI DAN MAKAN MINUM</option>
                        <option {{ $umkm->sector == 'PERTANIAN, KEHUTANAN, PETERNAKAN DAN PERIKANAN' ? 'selected' : '' }}>PERTANIAN, KEHUTANAN, PETERNAKAN DAN PERIKANAN</option>
                        <option {{ $umkm->sector == 'INDUSTRI PENGOLAHAN' ? 'selected' : '' }}>INDUSTRI PENGOLAHAN</option>
                        <option {{ $umkm->sector == 'JASA LAINNYA' ? 'selected' : '' }}>JASA LAINNYA</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Handphone:</strong>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" name="telp" value="{{ substr($umkm->telp, 3) }}" class="form-control" placeholder="Nomor" aria-label="Nomor" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </div>
      
    </form>
@endsection