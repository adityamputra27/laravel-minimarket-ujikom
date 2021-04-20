<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Illuminate\Support\Facades\DB;
use PDF;

class LaporanController extends Controller
{
    public function pembelianHome() 
    {
        return view('pages.reports.pembelians.index');
    }
    public function penjualanHome() 
    {
        return view('pages.reports.penjualans.index');
    }
    public function filterLaporanPembelian(Request $request)
    {
        if ($request->ajax()) {
            // echo "TEST";
            $tanggalMulai = $request->get('tanggalMulai');
            $tanggalSampai = $request->get('tanggalSampai');
            // echo date('Y-m-d', strtotime($tanggalMulai)) . " " . date('Y-m-d', strtotime($tanggalSampai));
            $reportPembelian = Pembelian::with('pemasoks', 'users', 'detailPembelians.barangs.getProduks')
                                ->orderBy('tanggal_masuk', 'DESC')
                                ->select('pembelians.*')
                                ->whereBetWeen('pembelians.tanggal_masuk', [$tanggalMulai, $tanggalSampai])
                                ->get();

            // dd($reportPembelian);
            // echo json_encode($reportPembelian);
            if (count($reportPembelian) > 0) {
                return response()->json([
                    'message' => 'success',
                    'data' => $reportPembelian
                ]);
            } else {
                return response()->json([
                    'message' => 'failed',
                    'data' => NULL
                ]);
            }
        }
    }
    public function getLaporanPembelian($tanggalMulai, $tanggalSampai)
    {
        $cetak = PDF::loadView('pages.reports.pembelians.reports')->setPaper('A4', 'landscape');
        // $reportPembelian = Pembelian::with('pemasoks', 'users', 'detailPembelians.barangs.getProduks')
        //                 ->orderBy('tanggal_masuk', 'DESC')
        //                 ->select('pembelians.*')
        //                 ->whereBetWeen('pembelians.tanggal_masuk', [$tanggalMulai, $tanggalSampai])
        //                 ->get();
    }
}
