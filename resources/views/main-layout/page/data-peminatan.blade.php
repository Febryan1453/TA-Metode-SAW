@extends('main-layout.base')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Peminatan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Peminatan</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Hasil Peminatan Mahasiswa</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-hover text-center">
                    <!-- <thead class="thead-light"> -->
                    <thead>
                      <tr>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Hasil Peminatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($hasilMinat as $row)
                        <tr>
                            <td><a href="#">{{ $row->nim }}</a></td>
                            <td>{{ $row->nama_mhs }}</td>
                            <td>{{ $row->hasil_peminatan }}</td>
                        </tr>
                      @empty
                        <tr>
                            <td colspan="8"> <br> <i class="fa-solid fa-file"></i> <br> Data Hasil Peminatan Belum Tersedia <br> </td>
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