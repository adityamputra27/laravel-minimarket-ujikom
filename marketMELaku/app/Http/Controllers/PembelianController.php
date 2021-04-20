<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use App\Models\Pemasok;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class PembelianController extends Controller
{
    private $barang;
    private $modulURL;

    public function __construct(Barang $barang)
    {
        $this->barang = $barang;
        $this->modulURL = route('pembelians.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksiBeli = Pembelian::orderBy('kode_masuk', 'ASC')->get();
        return view('pages.transactions.pembelians.index', [
            'transaksiBeli' => $transaksiBeli
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function kodePembelian()
    // {
    //     $dataPembelian = DB::table('pembelians')->orderBy('id')->get('id');
    //     foreach ($dataPembelian as $key => $value) {
    //         $kodeBaru = $value->id ?? 1;
    //     }
    //     $noUrut = (int) substr($kodeBaru, 3, 5);
    //     $noUrut++;
    //     $char = "P-";
    //     $urut = $char.sprintf("%05s", $noUrut);
    //     return $urut;
    // }

    public function create()
    {
        $lastId = Pembelian::select('kode_masuk')->orderBy('created_at', 'DESC')->first();

        if ($lastId == NULL) {
            $kodePembelian = 'PMB-00000001';
        } else {
            $kodePembelian = sprintf('PMB-%08d', substr($lastId->kode_masuk, 4)+ 1);
        }

        $pemasok = Pemasok::orderBy('nama_pemasok', 'ASC')->get();
        return view('pages.transactions.pembelians.form', [
            'kodePembelian' => $kodePembelian,
            'barang' => $this->barang->orderBy('nama_barang', 'ASC')->get(),
            'pemasok' => $pemasok
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

            $tanggalMasuk = date('Y-m-d', strtotime($request->tanggal_masuk));

            $pembelian = Pembelian::create([
                'kode_masuk' => $request->kode_masuk,
                'tanggal_masuk' => $tanggalMasuk,
                'total' => $request->total,
                'pemasoks_id' => $request->pemasoks_id,
                'users_id' => Auth::user()->id
            ]);

            $jumlah = $request->jumlah;

            foreach ($jumlah as $key => $value) {

                $barangId = $request->barangs_id[$key];

                $inputDetail = array(
                    'pembelians_id' => $pembelian['id'],
                    'barangs_id' => $barangId,
                    'harga_beli' => $request->harga_beli[$key],
                    'jumlah' => $value,
                    'sub_total' => floatval($request->harga_beli[$key]) * $value
                );

                $recordDetail[] = $inputDetail;

                // dd($inputDetail);

                // Update Stok Barang
                $barang = $this->barang->findOrFail($barangId);
                $barang->stok += $value;
                $barang->save();
            }

            DetailPembelian::insert($recordDetail);

            DB::commit();

            Session::flash('success', 'Transaksi Pembelian Berhasil Di Tambahkan!');
            return redirect($this->modulURL);
            
            // dd($detailPembelian);

        } catch (\Throwable $th) {

            DB::rollback();

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
