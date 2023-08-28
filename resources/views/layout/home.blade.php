@extends('layout.main')

@section('judul')
    <h1>Dashboard</h1>
@endsection

@section('isi')
@if ($user->role == 1)
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Data Siswa</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4  col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Data Kelas</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-stethoscope"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>44</h3>

              <p>Data Obat</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-medkit"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>150</h3>

              <p>Permission</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-unlock-alt"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4  col-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Role</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-cogs"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner">
              <h3>44</h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-user-circle"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </div>
  </section>
@endif
@if ($user->role == 2)
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Data Siswa</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4  col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Data Kelas</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-stethoscope"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>44</h3>

              <p>Data Obat</p>
            </div>
            <div class="icon">
              <i class="ion fa fa-medkit"></i>
            </div>
            <a href="#" class="small-box-footer"
              >More info <i class="fas fa-arrow-circle-right"></i
            ></a>
          </div>
        </div>
  </section>
@endif
@endsection   