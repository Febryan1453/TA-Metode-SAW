@extends('main-layout.base')

@section('content')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Input Data Peminatan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Input Data Peminatan</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">


              <!-- Horizontal Form -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Input Data Mahasiswa</h6>
                </div>
                <div class="card-body">

                  <form action="{{route('simpan.minat')}}" method="POST">
                    @csrf

                    <div class="form-group row">
                      <label for="nim" class="col-sm-2 col-form-label">Nim Mahasiswa</label>
                      <div class="col-sm-10">
                        <input type="text" name="nim" class="form-control" id="nim" placeholder="Input Nim Mahasiswa">
                      </div>
                    </div>                    

                    <div class="form-group row">
                      <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mhs" placeholder="Input Nama Mahasiswa">
                      </div>
                    </div>   
                    
                    <div class="form-group row">
                      <label for="profesi" class="col-sm-2 col-form-label">Profesi Kerja dan Karir</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="profesi" name="profesi_kerja">
                        <option value="">- Pilih -</option>
                        @foreach($profesi as $row)
                            <option value="{{ $row->nilai }}">{{ $row->nama_profesi }}</option>
                        @endforeach  
                      </select>
                      </div>                      
                    </div>
                    
                    <div class="form-group row">
                      <label for="minat" class="col-sm-2 col-form-label">Minat dan Bakat Mahasiswa</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="minat" name="minat_bakat">
                        <option value="">- Pilih -</option>
                        @foreach($minat as $row)
                            <option value="{{ $row->nilai }}">{{ $row->minat_bakat }}</option>
                        @endforeach  
                      </select>
                      </div>                      
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>

          </div>
          <!--Row-->




 
@endsection