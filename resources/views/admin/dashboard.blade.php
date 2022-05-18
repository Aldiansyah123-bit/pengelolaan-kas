@extends('layouts.base')

@section('title1')
{{ config('base.name', 'Dashboard') }}
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="mb-4 col-xl-4 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                PEMASUKAN</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">Rp {{ number_format($masuk->sum('jumlah'),2,'.','.') }} </div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-calendar fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="mb-4 col-xl-4 col-md-6">
            <div class="py-2 shadow card border-left-success h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                PENGELUARAN</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">Rp {{ number_format($keluar->sum('jumlah'),2,'.','.') }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-dollar-sign fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="mb-4 col-xl-4 col-md-6">
            <div class="py-2 shadow card border-left-warning h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                TABUNGAN</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">Rp {{ number_format($masuk->sum('jumlah')-($keluar->sum('jumlah')),2,'.','.') }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-comments fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 shadow card">
        <div class="py-3 card-header">
            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
        </div>
        <div class="card-body">
            <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
            </div>
            <hr>
            Styling for the bar chart can be found in the
            <code>/js/demo/chart-bar-demo.js</code> file.
        </div>
    </div>

@endsection
