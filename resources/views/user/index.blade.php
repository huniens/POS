@extends('layouts.template')

@section('content')

    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a>
                <button onclick="modalAction('{{ url('user/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <h5><i class="icon fas fa-check"></i> Berhasil</h5>
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan</h5>
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Level</label>
                        <div class="col-3">
                            <select class="form-control" id="level_id" name="level_id" required>
                                <option value="">- Semua -</option>
                                @foreach ($level as $item)
                                    <option value="{{ $item->level_id }}">{{ $item->level_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Level Pengguna</small>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Level Pengguna</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog"
            data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>

        @endsection

        @push('css')
        @endpush

        @push('js')
        <script>
        function modalAction(uri = '') {
        $('#myModal').load(uri, function() {
            $('#myModal').modal('show');
        });
    }

                $(document).ready(function() {
                    var dataUser = $('#table_user').DataTable({
                        serverSide: true,
                        ajax: {
                            url: "{{ url('user/list') }}",
                            dataType: "json",
                            type: "POST",
                            data: function(d) {
                                d.level_id = $('#level_id').val();
                            }
                        },
                        columns: [{
                                data: "DT_RowIndex", // nomor urut dari level datable addindexColum
                                className: "text-center",
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: "username",
                                className: "className",
                                orderable: true,
                                searchable: true
                            },
                            {
                                data: "nama",
                                className: "className",
                                orderable: true,
                                searchable: true
                            },
                            {
                                data: "level.level_nama",
                                className: "className",
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: "aksi",
                                className: "className",
                                orderable: false, // oderable : true, jika ingin kolom ini bisa diurutkan
                                searchable: false // searchhable: true, jika ingin kolom ini bisa di cari
                            }
                        ]
                    });

                    $('#level_id').change(function() {
                        dataUser.ajax.reload();
                    });
                });
            </script>
        @endpush