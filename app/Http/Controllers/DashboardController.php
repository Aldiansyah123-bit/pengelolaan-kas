<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Masuk;
use App\Models\Keluar;


class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        $masuk  = Masuk::all();
        $keluar = Keluar::all();
        return view('admin.dashboard',compact('masuk','keluar'),$data);
    }
}
