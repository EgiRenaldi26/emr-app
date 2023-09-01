@extends('layout.main')
@section('isi')
@auth
    
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><strong>Edit Datakelas</strong></h3>
    </div>
    <div class="card-body">
            <form method="POST" action="{{ route('kelas.update', $kelas->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="namakelas">Nama Kelas</label>
                    <input type="text" id="namakelas" class="form-control" name="namakelas" value="{{ $kelas->namakelas }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
      @endauth    
@endsection