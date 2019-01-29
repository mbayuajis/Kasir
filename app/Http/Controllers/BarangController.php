<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$barangs = Barang::all();
        return view('barang/index', ['barangs' => $barangs]);
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
    	$validated = $request->validated();
        Barang::create([
        	'nama_barang' => $request->nama_barang,
        	'stock' => $request->stock,
        	'harga_beli' => $request->harga_beli,
        	'harga_jual' => $request->harga_jual,
        ]);

        return redirect('/barang')->with('message', 'Berhasil menambahkan Barang!');
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
        $barang = Barang::where('id_barang', $id)->firstOrFail();
        // dd($barang);
        return response()->json($barang);
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
    	$cekbarang = Barang::where('id_barang', $id)->first();

        Barang::where('id_barang', $id)->update([
        	'nama_barang' => $request->nama_barangE,
        	'stock' => $cekbarang->stock + $request->stockE,
        	'harga_beli' => $request->harga_beliE,
        	'harga_jual' => $request->harga_jualE
        ]);

        return redirect('barang')->with('message', 'Berhasil mengubah barang ' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id_barang', $id)->delete();
        return redirect('barang')->with('message', 'Berhasil menghapus barang '.$id);
    }
}
