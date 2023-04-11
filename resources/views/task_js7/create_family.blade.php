@extends('main.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{url('/')}}>Home</a></li>
              <li class="breadcrumb-item active">Data Keluarga</li>
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
              <h3 class="card-title">Tambah atau Edit Data Keluarga</h3>

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

                <form method="POST" action="{{ $data_form}}">
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
                        <label>Jenis Kelamin</label>
                        <input class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ isset($data)? $data->jenis_kelamin : old('jenis_kelamin')}}" name="jenis_kelamin" type="text">
                        @error('jenis_kelamin')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($data)? $data->tanggal_lahir : old('tanggal_lahir')}}" name="tanggal_lahir" type="date">
                        @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <input class="form-control @error('agama') is-invalid @enderror" value="{{ isset($data)? $data->agama : old('agama')}}" name="agama" type="text">
                        @error('agama')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ isset($data)? $data->pekerjaan : old('pekerjaan')}}" name="pekerjaan" type="text">
                        @error('pekerjaan')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control @error('status') is-invalid @enderror" value="{{ isset($data)? $data->status : old('status')}}" name="status" type="text">
                        @error('status')
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
