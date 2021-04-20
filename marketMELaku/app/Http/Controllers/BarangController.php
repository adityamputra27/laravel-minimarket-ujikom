<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Session;
use Validator;
use App\Services\Response;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::orderBy('nama_barang')->get();
        return view('pages.barangs.index', [
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'unique:barangs,kode_barang',
            'produks_id' => 'required',
            'nama_barang' => 'required|min:3|unique:barangs,nama_barang',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
        ]);

        if ($validator->fails()) {
            return Response::validationError($validator->errors());
        }

        $data = [
            'kode_barang' => 'BRG-'.mt_rand(10000000,99999999),
            'produks_id' => $request->produks_id,
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ];
        Barang::create($data);
        Session::flash('success', 'Data Berhasil Ditambahkan!');

        return Response::success('success');
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
        $validator = Validator::make($request->all(), [
            'produks_id' => 'required',
            'nama_barang' => 'required|min:3',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $data = Barang::where('id', $id)->first();
        $arr = [
            'produks_id' => $request->produks_id,
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ];
        $data->update($arr);
        Session::flash('success', 'Data Berhasil Diupdate!');
        
        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Barang::where('id', $request->id);
        if ($data->delete()) {
            Session::flash('success', 'Data Berhasil Dihapus!');
            return redirect()->route('barangs.index');
        } else {
            Session::flash('error', 'Data Gagal Dihapus!');
            return redirect()->route('barangs.index');
        }
    }
}
