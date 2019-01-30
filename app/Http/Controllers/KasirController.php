<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use App\Models\Belanjaan;
use App\Models\Barang;
use App\Http\Requests\StoreBelanjaan;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$transaksis = Kasir::with('detailUserr')->get();
    	// dd($transaksis);
        return view('kasir/index', ['transaksis' => $transaksis]);
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
        Kasir::create([
        	'id_pegawai' => session('user')->id_pegawai,
            'status' => 'Memasukkan Belanjaan',
        ]);

        $cekNotransaksi = Kasir::where('id_pegawai', session('user')->id_pegawai)->orderBy('created_at', 'desc')->first();

        return redirect('/kasir/belanjaan/'.$cekNotransaksi->no_transaksi);
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

    public function belanjaan($id)
    {
        $cek = Kasir::where('no_transaksi', $id)->first();

        if($cek == null)
            abort(404);

        $daftarBelanja = Belanjaan::select('kode_barang',DB::raw('COUNT(*) as qty'))->groupBy('kode_barang')->where('no_transaksi', $id)->with('detailBarang')->get();

    	return view('kasir/belanjaan', ['id' => $id, 'daftarBelanjas' => $daftarBelanja]);
    }

    public function refrsBelanjaan($id)
    {
        $cek = Kasir::where('no_transaksi', $id)->first();

        if($cek == null)
            abort(404);

        $daftarBelanja = Belanjaan::select('kode_barang',DB::raw('COUNT(*) as qty'))->groupBy('kode_barang')->where('no_transaksi', $id)->with('detailBarang')->get();

        return view('kasir/refrsbelanjaan', ['id' => $id, 'daftarBelanjas' => $daftarBelanja]);
    }

    public function storeBelanjaan(StoreBelanjaan $request, $id){
        $validate = $request->validated();

        $cekBrng = Barang::where('id_barang', $request->kode_barang)->first();
        if($cekBrng == null)
            return response()->json(['sttus' => 'gagal']);

        Belanjaan::create([
            'no_transaksi' => $id,
            'kode_barang' => $request->kode_barang
        ]);

        return response()->json(['sttus' => 'berhasil']);
    }

    public function destroyBelanjaan($notrans, $barang){
        Belanjaan::where('no_transaksi', $notrans)->where('kode_barang', $barang)->delete();
    }

}
