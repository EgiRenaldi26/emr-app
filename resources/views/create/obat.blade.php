@extends('layout.main')
@section('isi')
@if ($user)
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>TAMBAH DATA OBAT</strong></h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('obat.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" id="nama_obat" class="form-control" name="nama_obat">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" id="stok" class="form-control" name="stok">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    @endif
@endsection