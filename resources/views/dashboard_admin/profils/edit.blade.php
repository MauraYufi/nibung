@extends('dashboard_admin.layouts.app')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('profils.update', 1) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Deskripsi Singkat</label>
            <textarea type="text" style="height:200px" name="profil_singkat" class="form-control" placeholder="Title" >{{ $profil->profil_singkat }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Visi</label>
            <textarea type="text" style="height:120px" name="visi" class="form-control" placeholder="Price">{{ $profil->visi }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Misi</label>
            <textarea type="text" style="height:120px" name="misi" class="form-control" placeholder="Product Code">{{ $profil->misi }}</textarea>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Perbarui</button>
            </div>
        </div>
    </form>
@endsection