@extends('main.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mata Kuliah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
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
                            <h3 class="card-title">Tambah atau Edit Mata Kuliah</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

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

                            <form method="POST" action="{{ $url_form }}">
                                @csrf
                                {!! isset($data) ? method_field('PUT') : '' !!}

                                <div class="form-group">
                                    <label for="Mata Kuliah">Mata Kuliah</label>
                                    <input class="form-control @error('nama_matkul') is-invalid @enderror"
                                        value="{{ isset($data) ? $data->nama_matkul : old('nama_matkul') }}" name="nama_matkul"
                                        type="text">
                                    @error('nama_matkul')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="SKS">SKS</label>
                                    <input class="form-control @error('sks') is-invalid @enderror"
                                        value="{{ isset($data) ? $data->sks : old('sks') }}" name="sks"
                                        type="text">
                                    @error('sks')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Semester">Semester</label>
                                    <input class="form-control @error('semester') is-invalid @enderror"
                                        value="{{ isset($data) ? $data->semester : old('semester') }}" name="semester"
                                        type="text">
                                    @error('semester')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Save" class="btn btn-sm btn-success my-2">
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
