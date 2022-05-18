<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluar;
use PDF;
// use Barryvdh\DomPDF\PDF;


class KeluarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'PENGELUARAN'
        ];

        $keluar = Keluar::orderBy('id','DESC')->get();
        return view('admin.keluar.index', compact('keluar'),$data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data'
        ];

        return view('admin.keluar.add', $data);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'kode'      => 'required',
            'tanggal'   => 'required',
            'keterangan'=> 'required',
            'jumlah'    => 'required',
        ],[
            'kode.required'         => 'Kode Wajib di Isi',
            'tanggal.required'      => 'Tanggal Wajib di Isi',
            'keterangan.required'   => 'Keterangan Wajib di Isi',
            'jumlah.required'       => 'Jumlah Uang Wajib di Isi',
        ]);

        Keluar::create([
            'kode'      => $request->kode,
            'tanggal'   => $request->tanggal,
            'keterangan'=> $request->keterangan,
            'jumlah'    => $request->jumlah,
        ]);

        return redirect('keluar')->with('status', 'Data Berhasil di Tambah');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data'
        ];

        $keluar = Keluar::where('id', $id)->first();

        return view('admin.keluar.edit', compact('keluar'), $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode'      => 'required',
            'tanggal'   => 'required',
            'keterangan'=> 'required',
            'jumlah'    => 'required',
        ],[
            'kode.required'         => 'Kode Wajib di Isi',
            'tanggal.required'      => 'Tanggal Wajib di Isi',
            'keterangan.required'   => 'Keterangan Wajib di Isi',
            'jumlah.required'       => 'Jumlah Uang Wajib di Isi',
        ]);

        Keluar::findOrFail($id)->update([
            'kode'      => $request->kode,
            'tanggal'   => $request->tanggal,
            'keterangan'=> $request->keterangan,
            'jumlah'    => $request->jumlah,
        ]);

        return redirect('keluar')->with('status', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        Keluar::destroy($id);
        return redirect('keluar')->with('status', 'Data Berhasil di Hapus');
    }

    public function print()
    {
        //GET DATA BERDASARKAN ID
        $cetak = Keluar::all();

        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('admin.keluar.print', compact('cetak'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
