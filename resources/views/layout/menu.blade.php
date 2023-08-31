@if ($user->role == 1)
<li class="nav-item">
    <a href="{{ url('dashboard')}}" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="nav-header">DATA MASTER</li>
  <li class="nav-item menu-open">
    
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a
          href="{{ url('datasiswa')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-users"></i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="{{ url('datakelas')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-stethoscope"></i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="{{ url('dataobat')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-medkit"></i>
          <p>Data Obat</p>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="{{ url('')}}"
          class="nav-link"
        >
        <i class="nav-icon fa fa-unlock"></i>
          <p>Permission</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- end -->
  <li class="nav-item">
    <a
      href=""
      class="nav-link"
    >
      <i class="nav-icon fa fa-cogs "></i>
      <p>Role</p>
    </a>
  </li>
  <li class="nav-item">
    <a
      href=""
      class="nav-link"
    >
      <i class="nav-icon fa fa-user-circle"></i>
      <p>User</p>
    </a>
  </li>
  <li class="nav-item">
    <a
      href="{{ url('logout')}}"
      class="nav-link"
    >
      <i class="nav-icon fas fa-sign-out-alt"></i>
      <p>Logout</p>
    </a>
  </li>
@endif
@if ($user->role == 2)
<li class="nav-item">
    <a href="{{ url('dashboard')}}" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="nav-header">DATA OPERATOR</li>
  <li class="nav-item menu-open">
    
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a
          href="{{ url('datasiswa')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-users"></i>
          <p>Data Siswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="{{ url('datakelas')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-stethoscope"></i>
          <p>Data Kelas</p>
        </a>
      </li>
      <li class="nav-item">
        <a
          href="{{ url('dataobat')}}"
          class="nav-link"
        >
          <i class="nav-icon fa fa-medkit"></i>
          <p>Data Obat</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- end -->
  <li class="nav-item">
    <a
      href="{{ url('logout')}}"
      class="nav-link"
    >
      <i class="nav-icon fas fa-sign-out-alt"></i>
      <p>Logout</p>
    </a>
  </li>
@endif

