<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
	protected $primaryKey = 'id_barang';
    protected $fillable = ['id_barang','nama_barang', 'stock', 'harga_beli', 'harga_jual'];

    function belanjaan()
    {
    	return $this->hasMany('App\Models\Belanjaan', 'kode_barang', 'id_barang');
    }

    static function storeBarang($request)
    {
    	Barang::create([
            'id_barang' => $request->kode_barang,
        	'nama_barang' => $request->nama_barang,
        	'stock' => $request->stock,
        	'harga_beli' => $request->harga_beli,
        	'harga_jual' => $request->harga_jual,
        ]);
    }

    static function editBarang($id)
    {
    	$barang = Barang::where('id_barang', $id)->firstOrFail();
    	return $barang;
    }

    static function updateBarang($request, $id)
    {
    	$cekbarang = Barang::where('id_barang', $id)->first();

        if ($cekbarang == null)
            return 0;

        Barang::where('id_barang', $id)->update([
            'id_barang' => $request->kode_barangE,
        	'nama_barang' => $request->nama_barangE,
        	'stock' => $cekbarang->stock + $request->stockE,
        	'harga_beli' => $request->harga_beliE,
        	'harga_jual' => $request->harga_jualE
        ]);

        return 1;
    }

    static function destroyBarang($id)
    {
    	Barang::where('id_barang', $id)->delete();
    }
}
