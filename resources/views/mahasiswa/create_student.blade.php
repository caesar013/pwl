@extends('main.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
                            <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                            <h3 class="card-title">Tambah atau Edit Data Mahasiswa</h3>

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
                                {!! isset($mahasiswa) ? method_field('PUT') : '' !!}

                                <div class="form-group">
                                    <label>NIM</label>
                                    <input class="form-control @error('nim') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->nim : old('nim') }}" name="nim"
                                        type="text">
                                    @error('nim')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->nama : old('nama') }}" name="nama"
                                        type="text">
                                    @error('nama')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select name="id" class="form-control">
                                        @foreach ($kelas as $kls)
                                            <option value="{{ $kls->id }}"
                                                @isset($mahasiswa)
                                    @if ($kls->id == $mahasiswa->kelas_id)
                                    @selected(true)
                                @endif
                                @endisset>
                                                {{ $kls->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    @error('kelas')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input class="form-control @error('jk') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->jk : old('jk') }}" name="jk"
                                        type="text">
                                    @error('jk')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->tempat_lahir : old('tempat_lahir') }}"
                                        name="tempat_lahir" type="text">
                                    @error('tempat_lahir')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->tanggal_lahir : old('tanggal_lahir') }}"
                                        name="tanggal_lahir" type="date">
                                    @error('tanggal_lahir')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->alamat : old('alamat') }}" name="alamat"
                                        type="text">
                                    @error('alamat')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>HP</label>
                                    <input class="form-control @error('hp') is-invalid @enderror"
                                        value="{{ isset($mahasiswa) ? $mahasiswa->hp : old('hp') }}" name="hp"
                                        type="text">
                                    @error('hp')
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
