@extends('layout.main')

@section('judul')
    <h1>Data Siswa</h1>
@endsection

@section('isi')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('datakelas/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <script>
                                    $(document).ready(function () {
                                        var message = {!! json_encode(Session::get('success')) !!};
                                        if (message) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success Message',
                                                text: message,
                                                confirmButtonText: 'OK'
                                            });
                                        }
                                    });
                                </script>                                                                                                                                                     
                                @endif
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $kelas as $k )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->namakelas }}</td>
                                        <td>
                                            <a href="{{ route('kelas.edit', ['id' => $k->id]) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> - 
                                            <a href="{{ route('kelas.destroy', ['id' => $k->id]) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="event.preventDefault();
                                                if (confirm('Apakah anda yakin ingin menghapus?')) {
                                                  document.getElementById('delete-form-{{ $k->id }}').submit();
                                                }">
                                                 <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <form id="delete-form-{{ $k->id }}" action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
