@extends('layouts.base')

@section('title1')
{{ config('base.name', 'Masuk') }}
@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">{{ $title }}</h1>

    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="card-header">
            <a href="/masuk/add" type="button" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>Add</a>
            <a href="/masuk/cetak" target="_blank" type="button" class="btn btn-success btn-sm btn-flat"><i class="fa fa-print"></i> cetak</a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> {{session('status')}}</h5>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah Uang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($masuk as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->kode }}</td>
                            <td>{{  Date::parse($data->tanggal)->format('j F Y') }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>{{ 'Rp ' .number_format($data->jumlah) }}</td>
                            <td class="text-center">
                                <a href="/masuk/edit/{{ $data->id }}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{ $data->id}}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($masuk as $data)
<div class="modal fade" id="delete{{ $data->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">{{ $data->kode}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Akan Menghapus Data ini ???</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <a href="/masuk/delete/{{ $data->id}}" type="button" class="btn btn-outline-light">Yes</a>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

@endsection
