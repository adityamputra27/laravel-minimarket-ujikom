<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Validator;
use Datatables;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.produks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllProduks(Request $request) 
    {
        if ($request->ajax()) {
            $data = Produk::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $actionButton = '
                        <div class="btn-group">
                            <a href="javascrip:void(0)" data-id="'.$data['id'].'" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="javascrip:void(0)" data-id="'.$data['id'].'" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    ';
                    return $actionButton;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

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
        // $input = $request->all();
        // Produk::create($input);
        // return redirect()->back()->withInput();
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|min:3|max:255'
        ], 
        [
            'nama_produk.required' => 'Nama Produk Harus Diisi!'
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()
            ]);
        } else {
            $data = Produk::create([
            'nama_produk' => $request->nama_produk
            ]);
            
            if ($data) {
                return response()->json([
                    'status_code' => 200, 
                    'message' => 'Sukses Tambah Data Produk!',
                    'data' => $data
                ], 200);
            }
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
