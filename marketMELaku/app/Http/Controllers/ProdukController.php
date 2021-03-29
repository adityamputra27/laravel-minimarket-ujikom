<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produk;
use Validator;
use Datatables;
use Session;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('nama_produk', 'ASC')->get();
        return view('pages.produks.index', [
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Produk;
        $data->nama_produk = Str::upper($request->nama_produk);
        $data->save();
        Session::flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('produks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Produk::where('id', $request->id)->first();
        $arr = [
            'nama_produk' => $request->nama_produk
        ];
        $data->update($arr);
        Session::flash('success', 'Data Berhasil Diupdate!');
        return redirect()->route('produks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Produk::where('id', $request->id);
        if ($data->delete()) {
            Session::flash('success', 'Data Berhasil Dihapus!');
            return redirect()->route('produks.index');
        } else {
            Session::flash('error', 'Data Gagal Dihapus!');
            return redirect()->route('produks.index');
        }
    }
}
