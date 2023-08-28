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
                            <a href="{{ url('datasiswa/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nama Kelas</th>
                                            <th>Sakit</th>
                                            <th>Tanggal</th>
                                            <th>Nama Obat</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $Siswa as $s )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $s->nisn }}</td>
                                            <td>{{ $s->nama_lengkap }}</td>
                                            <td>{{ $s->nama_kelas }}</td>
                                            <td>{{ $s->sakit }}</td>
                                            <td>{{ $s->tanggal }}</td>
                                            <td>{{ $s->nama_obat }}</td>
                                            <td>{{ $s->alamat }}</td>
                                            <td>{{ $s->status }}</td>
                                            <td>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                <a href="{{ route('data.edit', ['id' => $s->id]) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa fa-print" style="padding-right: 5px;"></i></a>
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
