<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        
        if($request->has('cari')){
            $data_pelanggan = \App\Pelanggan::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pelanggan = \App\Pelanggan::all();
        }
        return view('pelanggan.index',['data_pelanggan' => $data_pelanggan]);
    }
    public function create(Request $request)
    {
        \App\Pelanggan::create($request->all());
        return redirect('\pelanggan')->with('sukses','Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pelanggan = \App\Pelanggan::find($id);
        return view('pelanggan/edit',['pelanggan' => $pelanggan]);
    }
    public function update(Request $request,$id)
    {
        $pelanggan = \App\Pelanggan::find($id);
        $pelanggan->update($request->all());
        return redirect('/pelanggan')->with('sukses','Data berhasil diubah');
    }
    public function delete($id)
    {
        $pelanggan = \App\Pelanggan::find($id);
        $pelanggan->delete($pelanggan);
        return redirect('/pelanggan')->with('sukses','Data berhasil dihapus');
    }
    public function profile($id)
    {
        $pelanggan = \App\Pelanggan::find($id);
        // $angsuran = \App\Angsuran::find($pelanggan_id);
         return view('pelanggan.profile',['pelanggan' => $pelanggan]);
         //return view('pelanggan.profile', compact('pelanggan','angsuran'));
    }


}
