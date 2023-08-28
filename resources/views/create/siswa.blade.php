@extends('layout.main')
@section('isi')
@if ($user)
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>TAMBAH DATASISWA</strong></h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('data.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="number" id="nisn" class="form-control" name="nisn">
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="nama_kelas">Kelas</label>
                    <select class="form-control" id="nama_kelas" name="nama_kelas">
                        <option value="" selected>Pilih</option>
                        <option value="12 rpl 2">12 rpl 2</option>
                        <option value="12 rpl 1">12 rpl 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sakit">sakit</label>
                    <input type="text" id="sakit" class="form-control" name="sakit">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" id="nama_obat" class="form-control" name="nama_obat">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    @endif
@endsection