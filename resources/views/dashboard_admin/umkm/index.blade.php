@extends('dashboard_admin.layouts.app')
  
@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List UMKM Desa Nibung</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ route('umkms.create') }}"> Tambah Data UMKM Baru </a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Sektor</th>
            <th>Nomor Handphone</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($umkms as $umkm)
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
        @endforeach
    </table>
     
    {!! $umkms->links() !!}
 
@endsection