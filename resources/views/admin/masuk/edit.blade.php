@extends('layouts.base')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="mb-2 text-gray-800 h3">{{ $title }}</h1>

    <!-- DataTales Example -->
    <div class="mb-4 shadow card">
        <div class="card-body">
            <div class="table-responsive">
                <form action="/masuk/update/{{ $masuk->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input name="kode" class="form-control form-control-user" value="{{ $masuk->kode }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control form-control-user" value="{{ $masuk->tanggal }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control form-control-user" value="{{ $masuk->keterangan }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jumlah Uang</label>
                                    <input type="text" name="jumlah" class="form-control form-control-user" value="{{ $masuk->jumlah }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/masuk" class="float-right btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
