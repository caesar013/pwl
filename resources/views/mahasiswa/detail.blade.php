@extends('main.template')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{ $mhs->nim }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $mhs->nama }}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{ $mhs->kelas->nama_kelas }}</li>
                        <li class="list-group-item"><b>Jenis_Kelamin: </b>{{ $mhs->jk }}</li>
                        <li class="list-group-item"><b>Tempat_lahir: </b>{{ $mhs->tempat_lahir }}</li>
                        <li class="list-group-item"><b>Tanggal_lahir: </b>{{ $mhs->tanggal_lahir }}</li>
                        <li class="list-group-item"><b>Alamat: </b>{{ $mhs->alamat }}</li>
                        <li class="list-group-item"><b>No_Handphone: </b>{{ $mhs->hp }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt3" href="{{ route('student.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
