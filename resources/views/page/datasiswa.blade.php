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
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ url('datasiswa/create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="max-width: 300px;">
                                        <input type="text" name="table_search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
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
                                            <td>
                                                @if ($s->class)
                                                    {{ $s->class->namakelas }}
                                                @endif
                                            </td>
                                            <td>{{ $s->sakit }}</td>
                                            <td>{{ $s->tanggal }}</td>
                                            <td>
                                                @if ($s->class2)
                                                    {{ $s->class2->nama_obat }}
                                                @endif
                                            </td>
                                            <td>{{ $s->alamat }}</td>
                                            <td>{{ $s->status }}</td>
                                            <td>
                                                <a href="{{ route('data.destroy', ['id' => $s->id]) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault();
                                                    if (confirm('Apakah anda yakin ingin menghapus?')) {
                                                      document.getElementById('delete-form-{{ $s->id }}').submit();
                                                    }">
                                                     <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-form-{{ $s->id }}" action="{{ route('data.destroy', $s->id) }}" method="POST" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form> 
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
