<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasok;
use App\Models\DataKota;
use Session;
use Validator;
use Illuminate\Support\Str;

class PemasokController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = DataKota::orderBy('kabupaten_kota', 'ASC')->get();
        $pemasok = Pemasok::orderBy('nama_pemasok')->get();
        return view('pages.pemasoks.index', [
            'pemasok' => $pemasok,
            'kota' => $kota
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
            'nama_pemasok' => 'required|unique:pemasoks,nama_pemasok',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required|unique:pemasoks,no_telp'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $pemasok = new Pemasok;
        $pemasok->kode_pemasok = mt_rand(10000, 99999);
        $pemasok->nama_pemasok = $request->nama_pemasok;
        $pemasok->alamat = $request->alamat;
        $pemasok->kota = $request->kota;
        $pemasok->no_telp = $request->no_telp;
        $pemasok->save();

        Session::flash('success', 'Data Berhasil Ditambahkan!');
        return response()->json([
            'status' => 'success'
        ], 200);
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
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $pemasok = Pemasok::findOrFail($id);

        $pemasok->nama_pemasok = $request->nama_pemasok;
        $pemasok->alamat = $request->alamat;
        $pemasok->kota = $request->kota;
        $pemasok->no_telp = $request->no_telp;
        $pemasok->save();

        Session::flash('success', 'Data Berhasil Diupdate!');
        return response()->json([
            'status' => 'success'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemasok = Pemasok::findOrFail($id);

        $pemasok->delete();

        Session::flash('success', 'Data Berhasil Dihapus!');
        return redirect()->route('pemasoks.index');
    }
}
