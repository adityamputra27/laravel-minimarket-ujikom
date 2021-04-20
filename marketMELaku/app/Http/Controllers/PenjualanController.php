<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use App\Models\Barang;
use App\Models\TampungBayar;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class PenjualanController extends Controller
{
    private $barang;
    private $user;

    public function __construct()
    {
        $this->barang = Barang::orderBy('nama_barang', 'ASC')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.transactions.penjualans.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $pelanggan = Pelanggan::orderBy('nama', 'ASC')->get();
        $lastId = Penjualan::select('no_faktur')->orderBy('created_at', 'DESC')->first();

        if ($lastId == NULL) {
            $noFaktur = 'TRX-00000001';
        } else {
            $noFaktur = sprintf('TRX-%08d', substr($lastId->no_faktur, 4)+ 1);
        }

        return view('pages.transactions.penjualans.form', [
            'kasir' => $user->name,
            'pelanggan' => $pelanggan,
            'noFaktur' => $noFaktur,
            'barang' => $this->barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            $user = Auth::user();

            $tglFaktur = date('Y-m-d', strtotime($request->tgl_faktur));

            $penjualan = new Penjualan;
            $penjualan->no_faktur = $request->no_faktur;
            $penjualan->tgl_faktur = $tglFaktur;
            $penjualan->total_bayar = $request->total_bayar;
            $penjualan->diskon = $request->diskon ? $request->diskon : 0;
            $penjualan->pelanggans_id = $request->pelanggans_id;
            $penjualan->users_id = $user->id;
            $penjualan->save();

            $jumlah = $request->jumlah;

            foreach ($jumlah as $key => $value) {
                
                $barangId = $request->barangs_id[$key];
                $hargaBeli = $request->harga_jual[$key];

                $detailPenjualan = array(
                    'penjualans_id' => $penjualan->id,
                    'barangs_id' => $barangId,
                    'harga_jual' => $hargaBeli,
                    'jumlah' => $value,
                    'sub_total' => \floatval($hargaBeli) * $value
                );

                $newRow[] = $detailPenjualan;

                // Update stok brang
                $barang = Barang::findOrFail($barangId);
                $barang->stok -= $value;
                $barang->save();

            }
            
            DetailPenjualan::insert($newRow);
            
            // Inser ke tmpung bayar
            TampungBayar::create([
                'penjualans_id' => $penjualan->id, 
                'total' => $request->total_bayar, 
                'terima' => $request->terima, 
                'kembali' => $request->kembali
            ]);

            DB::commit();

            Session::flash('success', 'Transaksi Penjualan Berhasil Di Tambahkan!');
            return redirect()->route('penjualans.index');

        } catch (\Throwable $th) {

            DB::rollback();
            return $th;

        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
