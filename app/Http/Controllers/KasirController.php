<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use App\Http\Requests\StoreBelanjaan;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$dataIndex = Kasir::indexKasir();
    	
        return view('kasir/index', ['transaksis' => $dataIndex]);
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
        $dataStore = Kasir::storeTransaksi();

        return redirect('/kasir/belanjaan/'.$dataStore);
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
        $dataBelanjaan = Kasir::indexBelanjaan($id);

    	return view('kasir/belanjaan', ['id' => $id, 'daftarBelanjas' => $dataBelanjaan['daftarBelanja'], 'statustrans' => $dataBelanjaan['cekstat']]);
    }

    public function refrsBelanjaan($id)
    {
        $dataBelanjaanrfrs = Kasir::refreshBelanjaan($id);

        if($dataBelanjaanrfrs['cek2'] != null)
            return redirect('/kasir');

        return view('kasir/refrsbelanjaan', ['id' => $id, 'daftarBelanjas' => $dataBelanjaanrfrs['daftarBelanja']]);
    }

    public function storeBelanjaan(StoreBelanjaan $request, $id){
        $validate = $request->validated();

        $cekBrng = Kasir::storeBelanjaanm($request, $id);
        if($cekBrng == "tidakada")
            return response()->json(['sttus' => 'gagal']);
        else if($cekBrng == "habis")
            return response()->json(['sttus' => 'habis']);
    }

    public function destroyBelanjaan($notrans, $barang){
        Kasir::destroyBelanjaanm($notrans, $barang);
    }

    public function destroyBelanjaanper($notrans, $barang){
        Kasir::destroyBelanjaanperm($notrans, $barang);
    }

    public function simpanBelanjaan(Request $request, $id){
        Kasir::simpanBelanjaanm($id);

        return redirect('kasir')->with('message', 'Belnjaan ' . $id . ' Selesai!');
    }

    public function penjualanHariini(){
        return Kasir::ppHriini();
    }

    public function asdpo(){
        // $asdq = Belanjaan::select('kode_barang', DB::raw('COUNT(*) as qty'))->with(['detailBarang' => function($query){
        //     $query->select('id_barang', 'nama_barang');
        // }])->with(['detailTransaksi' => function($query){
        //     $query->select('no_transaksi');
        // }])->groupBy('kode_barang')->get();

        $reportData = Kasir::with(['detailBelanjaan' => function($query){
            $query->with(['detailBarang' => function($queryy){
                $queryy->select('harga_jual', 'harga_beli', 'nama_barang', 'id_barang');
            }])->select('kode_barang', 'no_transaksi', DB::raw('COUNT(kode_barang) as jum'))->groupBy('kode_barang', 'no_transaksi');
        }])->with(['detailUserr' => function($query){
            $query->select('nama_pegawai', 'id_pegawai');
        }])->where('no_transaksi', '2019-01-31-000000019')->first();

        foreach ($reportData->detailBelanjaan as $key) {
            Report::create([
                'no_transaksi' => $reportData->no_transaksi,
                'kode_barang' => $key->kode_barang,
                'nama_barang' => $key->detailBarang->nama_barang,       
                'qty' => $key->jum,
                'harga_beli' => $key->detailBarang->harga_beli,
                'harga_jual' => $key->detailBarang->harga_jual,
                'nama_kasir' => $reportData->detailUserr->nama_pegawai,
            ]);
        }
    }

}
