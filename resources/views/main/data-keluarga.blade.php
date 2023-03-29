@extends('main.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Keluarga</h3>

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
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Pekerjaan</th>
                  <th>Status Hubungan dalam Keluarga</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->jenis_kelamin}}</td>
                    <td>{{$a->tanggal_lahir}}</td>
                    <td>{{$a->agama}}</td>
                    <td>{{$a->pekerjaan}}</td>
                    <td>{{$a->status}}</td>
                </tr>
                @endforeach
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