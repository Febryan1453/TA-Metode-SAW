@extends('main-layout.base')

@section('content')

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nilai Mahasiswa</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Daftar Nilai Mahasiswa</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Jarkom</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-hover text-center">
                    <!-- <thead class="thead-light"> -->
                    <thead>
                      <tr>
                        <th>Nim</th>
                        <th>Sistem Teknologi Informasi</th>
                        <th>Jaringan Komputer</th>
                        <th>Praktikum Jaringan Komputer</th>
                        <th>Sistem Digital</th>
                        <th>Arsitektur Organisasi Komputer</th>
                        <th>Keamanan Informasi</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($jarkom as $row)
                        <tr>
                            <td><a href="#">{{ $row->nim }}</a></td>
                            <td>{{ $row->sistem_tekinf }}</td>
                            <td>{{ $row->jarkom }}</td>
                            <td>{{ $row->prak_jarkom }}</td>
                            <td>{{ $row->sistem_digital }}</td>
                            <td>{{ $row->aok }}</td>
                            <td>{{ $row->keamanan_info }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <!-- <td><span class="badge badge-success">Delivered</span></td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td> -->
                        </tr>
                      @empty
                        <tr>
                            <td colspan="8"> <br> <i class="fa-solid fa-file"></i> <br> Nilai Jarkom Mahasiswa Belum Tersedia <br> </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Rpl</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush text-center table-hover">
                    <!-- <thead class="thead-light"> -->
                    <thead>
                      <tr>
                        <th>Nim</th>
                        <th>Dasar-dasar Pemograman</th>
                        <th>Praktikum Dasar-dasar Pemograman</th>
                        <th>Praktikum Basis Data</th>
                        <th>Basis Data</th>
                        <th>Pemograman Berorientasi Objek</th>
                        <th>Praktikum Pemograman Berorientasi Objek</th>
                        <th>Rekayasa Perangkat Lunak</th>
                        <th>Basis Data Lanjutan</th>
                        <th>Pemograman Visual</th>
                        <th>Analisa Perancangan Sistem</th>
                        <th>Teori Bahasa dan Automata</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($rpl as $row)
                        <tr>
                            <td><a href="#">{{ $row->nim }}</a></td>
                            <td>{{ $row->ddp }}</td>
                            <td>{{ $row->prak_ddp }}</td>
                            <td>{{ $row->prak_basdat }}</td>
                            <td>{{ $row->basdat }}</td>
                            <td>{{ $row->pbo }}</td>
                            <td>{{ $row->prak_pbo }}</td>
                            <td>{{ $row->rpl }}</td>
                            <td>{{ $row->basdat_lanjut }}</td>
                            <td>{{ $row->pem_visual }}</td>
                            <td>{{ $row->aps }}</td>
                            <td>{{ $row->tbo }}</td>
                            <td>{{ $row->jumlah }}</td>
                        </tr>
                      @empty
                        <tr>
                            <td colspan="8"> <br> <i class="fa-solid fa-file"></i> <br> Nilai Rpl Mahasiswa Belum Tersedia <br> </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Kwc</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush text-center table-hover">
                    <!-- <thead class="thead-light"> -->
                    <thead>
                      <tr>
                        <th>Nim</th>
                        <th>Data Mining</th>
                        <th>Teknologi Web</th>
                        <th>Praktikum Teknologi Web</th>
                        <th>Sistem Data dan Algoritma</th>
                        <th>Praktikum Sistem Data dan Algoritma</th>
                        <th>Dasar-dasar Algoritma</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($kwc as $row)
                        <tr>
                            <td><a href="#">{{ $row->nim }}</a></td>
                            <td>{{ $row->data_mining }}</td>
                            <td>{{ $row->tekweb }}</td>
                            <td>{{ $row->prak_tekweb }}</td>
                            <td>{{ $row->sda }}</td>
                            <td>{{ $row->prak_sda }}</td>
                            <td>{{ $row->dasar_algoritma }}</td>
                            <td>{{ $row->jumlah }}</td>
                        </tr>
                      @empty
                        <tr>
                            <td colspan="8"> <br> <i class="fa-solid fa-file"></i> <br> Nilai Kwc Mahasiswa Belum Tersedia <br> </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
@endsection