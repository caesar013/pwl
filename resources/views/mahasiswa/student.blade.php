@extends('main.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Mahasiswa</h3>

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
                    <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa"
                        tabindex="3">Tambah
                        Data</button>
                    <table class="table table-hover text-nowrap" id="data_mahasiswa">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
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

    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('student') }}" role="form" class="form-horizontal" id="form_mahasiswa">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="nim">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="tempat_lahir">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir"
                                    name="tempat_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control form-control-sm" id="tanggal_lahir"
                                    name="tanggal_lahir" value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="jk">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jk" id="jk">
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="kelas_id">Kelas</label>
                            <div class="col-sm-10">
                                <select name="kelas_id" id="kelas_id" class="form-control form-control-sm">
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="hp">No. HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"
                                    value="" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="detail_data" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row sm-2">
                        <div class="col-sx-6 col-sm-2"><b>NIM</b></div>
                        <div class="col-sx-6 col-sm-10" id="nim"></div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-sm-2 "><b>Nama</b></div>
                        <div id="nama" class="col-sx-6 col-sm-10 "></div>
                    </div>
                    <div class="row sm-3">
                        <div class="col-sx-6 col-sm-2 "><b>TTL</b></div>
                        <div class="col-sx-6 col-sm-10 ">
                            <span id="tempat"></span>, <span id="tanggal"></span>
                        </div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-sx-6 col-sm-2 "><b>Kelamin</b></div>
                        <div id="jk" class="col-sx-6 col-sm-10"></div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-sx-6 col-sm-2 "><b>Kelas</b></div>
                        <div class="col-sx-6 col-sm-10 " id="kls"></div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-sx-6 col-sm-2 "><b>No. HP</b></div>
                        <div class="col-sx-6 col-sm-10 " id="hp"></div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-sx-6 col-sm-2 "><b>Alamat</b></div>
                        <div class="col-sx-6 col-sm-10 " id="alamat"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@push('scripts')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #jk').val($(th).data('jk'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #kelas_id').val($(th).data('kelas_id'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function detail(obj) {
            $('#detail_data').modal('show');
            $('#detail_data .modal-title').html('Detail Data Mahasiswa');
            $('#detail_data #nim').html($(obj).data('nim'));
            $('#detail_data #nama').html($(obj).data('nama'));
            if ($(obj).data('jk') == "l") {
                $('#detail_data #jk').html("Laki-laki");
            } else if ($(obj).data('jk') == "p") {
                $('#detail_data #jk').html("Perempuan");
            }
            $('#detail_data #tanggal').html($(obj).data('tanggal_lahir'));
            $('#detail_data #alamat').html($(obj).data('alamat'));
            $('#detail_data #hp').html($(obj).data('hp'));
            $('#detail_data #tempat').html($(obj).data('tempat_lahir'));
            $('#detail_data #kls').html($(obj).data('kelas_nama'));
        }

        var dataMahasiswa;

        $(document).ready(function() {
            dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'kelas.nama_kelas',
                        name: 'kelas.nama_kelas',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: function(d) {
                            if (d.jk == "l") {
                                return "Laki-laki";
                            } else if (d.jk == "p") {
                                return "Perempuan";
                            }
                        },
                        name: 'jk',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var btn = `<button data-url="{{ url('/student') }}/` + data +
                                `" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="` +
                                row.id + `" data-nim="` + row.nim + `" data-nama="` + row.nama +
                                `" data-jk="` + row.jk + `" data-kelas_id="` + row.kelas_id +
                                `"><i class="fa fa-edit"></i> Edit</button>` +
                                `<button data-url="{{ url('/student') }}/` + data +
                                `" class="btn btn-xs btn-info" onclick="detail(this)" data-id="` +
                                row.id + `"
                                    data-nim="` + row.nim + `" data-nama="` + row.nama + `"
                                    data-jk="` + row.jk + `" data-kelas_nama="` + row.kelas.nama_kelas + `"
                                    data-alamat="` + row.alamat + `" data-tanggal_lahir="` + row.tanggal_lahir + `"
                                    data-tempat_lahir="` + row.tempat_lahir + `" data-hp="` + row.hp + `"
                                    ><i class="fa fa-list"></i> Detail</button>` +
                                `<button data-url="{{ url('/student') }}/` + data + `" class="btn btn-xs btn-danger"
                                onclick="deleteData(this)" data-token="{{csrf_token()}}">
                                        <i class="fa fa-trash"></i> Hapus</button>`;
                            return btn;
                        }
                    },

                ]
            });
            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('student') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }

                    }
                });
            });
        });

        function deleteData(obj) {
            var url = $(obj).data('url');
            var c = confirm('Apakah anda yakin ingin menghapus data ini?');
            if (c == true) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            alert(data.message);
                            dataMahasiswa.ajax.reload();
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        }
    </script>
@endpush
