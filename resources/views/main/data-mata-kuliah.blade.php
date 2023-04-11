@extends('main.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mata Kuliah</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
            <a href="{{url('/college/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Mata Kuliah</th>
                  <th>Hari</th>
                  <th>Nama Dosen</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if ($data->count() >0)
                    @foreach ($data as $i => $a)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$a->nama}}</td>
                            <td>{{$a->hari}}</td>
                            <td>{{$a->dosen}}</td>
                            <td>
                                {{-- buat tombol --}}
                                <a href="{{url('/college/'.$a->id.'/edit')}}"class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{url('/college/'.$a->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">
                            Data Tidak ada
                        </td>
                    </tr>
                @endif
              </tbody>
            </table>
          </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
