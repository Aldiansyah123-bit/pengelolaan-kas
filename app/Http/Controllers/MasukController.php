<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masuk;
use PDF;
// use Barryvdh\DomPDF\PDF;

class MasukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'PEMASUKAN'
        ];

        $masuk = Masuk::orderBy('id','DESC')->get();
        return view('admin.masuk.index',compact('masuk'), $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Edit'
        ];

        $masuk = Masuk::where('id',$id)->first();
        return view('admin.masuk.edit', compact('masuk'), $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode'      => 'required',
            'tanggal'   => 'required',
            'keterangan'=> 'required',
            'jumlah'    => 'required',
        ],
        [
            'kode.required'         => 'Kode Wajib di Isi',
            'tanggal.required'      => 'Tanggal Wajib di Isi',
            'keterangan.required'   => 'Keterangan Wajib di Isi',
            'jumlah.required'       => 'Jumlah Wajib di Isi',
        ]);

        Masuk::findOrFail($id)
        ->update([
            'kode'      => $request->kode,
            'tanggal'   => $request->tanggal,
            'keterangan'=> $request->keterangan,
            'jumlah'    => $request->jumlah,
        ]);

        return redirect('masuk')->with('status', 'Data Berhasil di Update');
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data'
        ];
        return view('admin.masuk.add', $data);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'kode'      => 'required',
            'tanggal'   => 'required',
            'keterangan'=> 'required',
            'jumlah'    => 'required',
        ],
        [
            'kode.required'         => 'Kode Wajib di Isi',
            'tanggal.required'      => 'Tanggal Wajib di Isi',
            'keterangan.required'   => 'Keterangan Wajib di Isi',
            'jumlah.required'       => 'Jumlah Wajib di Isi',
        ]);

        Masuk::create([
            'kode'       => $request->kode,
            'tanggal'    => $request->tanggal,
            'keterangan' => $request->keterangan,
            'jumlah'     => $request->jumlah,
        ]);

        return redirect('masuk')->with('status', 'Data Berhasil di Tambah');
    }

    public function delete($id)
    {
        Masuk::destroy($id);
        return redirect('masuk')->with('status', 'Data Berhasil di Hapus');
    }

    public function print()
    {
        //GET DATA BERDASARKAN ID
        $cetak = Masuk::all();

        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.masuk.print', compact('cetak'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
