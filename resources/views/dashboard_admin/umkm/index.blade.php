@extends('dashboard_admin.layouts.app')
  
@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List UMKM Desa Nibung</h2>
            </div>
            <form action="{{ route('umkms.search') }}" method="GET">
                <div class="input-group mb-4">
                    <div class="form-outline">
                        <input type="text" name="search" placeholder="Cari berdasarkan nama..." class="form-control" style="width: 300px;"/>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-primary" href="{{ route('umkms.reset') }}">Reset</button>
                </div>
            </form>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('umkms.create') }}"> Tambah Data UMKM Baru </a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sektor</th>
                <th>Nomor Handphone</th>
                <th width="280px">Aksi</th>
            </tr>

            @forelse ($umkms as $umkm)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $umkm->name }}</td>
                <td>{{ $umkm->sector }}</td>
                <td>{{ $umkm->telp }}</td>
                <td>
                    <form action="{{ route('umkms.destroy',$umkm->id) }}" method="POST">
        
                        <a class="btn btn-primary" href="{{ route('umkms.edit',$umkm->id) }}">Ubah</a>
        
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
                <!-- Tampilkan pesan jika hasil pencarian kosong -->
                <tr>
                    <td colspan="5">Tidak ditemukan data yang sesuai.</td>
                </tr>
            @endforelse
        </table>
    </div>

    <style>
        .table-responsive {
            overflow-x: auto;
        }
    </style>
     
    {!! $umkms->links('pagination::bootstrap-5') !!}
 
@endsection