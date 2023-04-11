@extends('main.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{url('/')}}>Home</a></li>
              <li class="breadcrumb-item active">Data Mata Kuliah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah atau Edit Data Mata Kuliah</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{$data_form}}">
                    @csrf
                    {!! (isset($data))? method_field('PUT') : '' !!}

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($data)? $data->nama : old('nama')}}" name="nama" type="text">
                        @error('nama')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input class="form-control @error('dosen') is-invalid @enderror" value="{{ isset($data)? $data->dosen : old('dosen')}}" name="dosen" type="text">
                        @error('dosen')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Hari</label>
                        <input class="form-control @error('hari') is-invalid @enderror" value="{{ isset($data)? $data->hari : old('hari')}}" name="hari" type="text">
                        @error('hari')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-sm btn-success my-2">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection

@push('custom_js')
@endpush
