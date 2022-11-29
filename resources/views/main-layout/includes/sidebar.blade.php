<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
          <i class="fa-solid fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Method SAW</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Nilai Mata Kuliah
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <!-- <i class="fab fa-fw fa-wpforms"></i> -->
          <i class="fa-solid fa-file-pen"></i>
          <span>Input Nilai</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mata Kuliah</h6>
            <a class="collapse-item" href="form_basics.html">Jarkom</a>
            <a class="collapse-item" href="form_advanceds.html">Rpl</a>
            <a class="collapse-item" href="form_advanceds.html">Kwc</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('nilai.mhs') }}">
          <!-- <i class="fas fa-fw fa-palette"></i> -->
          <i class="fa-solid fa-table-list"></i>
          <span>Daftar Nilai Mahasiswa</span>
        </a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Peminatan
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <!-- <i class="fas fa-fw fa-columns"></i> -->
          <i class="fa-solid fa-file-pen"></i>
          <span>Input Peminatan</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Peminatan</h6>
            <a class="collapse-item" href="{{ route('input.minat') }}">Input Data</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('data.minat') }}">
          <!-- <i class="fas fa-fw fa-chart-area"></i> -->
          <i class="fa-solid fa-table-list"></i>
          <span>Data Peminatan</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <!-- <div class="version" id="version-ruangadmin"></div> -->
</ul>