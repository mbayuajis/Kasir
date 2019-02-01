<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kasir extends Model
{
    protected $primaryKey = 'no_transaksi';
    protected $table = "transaksi";
	public $incrementing = false;
    protected $fillable = ['id_pegawai', 'status'];

    function detailUserr()
    {
    	return $this->belongsTo('App\Models\User', 'id_pegawai', 'id_pegawai');
    }

    function detailBelanjaan()
    {
    	return $this->hasMany('App\Models\Belanjaan', 'no_transaksi', 'no_transaksi');
    }

    static function indexKasir()
    {
    	return Kasir::with('detailUserr')->get();
    }

    static function storeTransaksi()
    {
    	Kasir::create([
        	'id_pegawai' => session('user')->id_pegawai,
            'status' => 'Memasukkan Belanjaan',
        ]);

        $cekNotransaksi = Kasir::where('id_pegawai', session('user')->id_pegawai)->orderBy('created_at', 'desc')->first();

        return $cekNotransaksi->no_transaksi;
    }

    static function indexBelanjaan($id)
    {
    	$cek = Kasir::where('no_transaksi', $id)->first();
        $cek2 = Kasir::where('no_transaksi', $id)->where('status', 'Selesai')->first();
       
        if($cek == null)
            abort(404);

        $cekstat = "";
        if($cek2 != null)
            $cekstat = $cek2->status;

        $daftarBelanja = Belanjaan::select('kode_barang',DB::raw('COUNT(*) as qty'))->groupBy('kode_barang')->where('no_transaksi', $id)->with('detailBarang')->get();

        return ['cekstat' => $cekstat, 'daftarBelanja' => $daftarBelanja];
    }

    static function refreshBelanjaan($id)
    {
    	$cek = Kasir::where('no_transaksi', $id)->first();
        $cek2 = Kasir::where('no_transaksi', $id)->where('status', 'Selesai')->first();
        if($cek == null)
            abort(404);

        $daftarBelanja = Belanjaan::select('kode_barang',DB::raw('COUNT(*) as qty'))->groupBy('kode_barang')->where('no_transaksi', $id)->with('detailBarang')->get();

        return ['cek2' => $cek2, 'daftarBelanja' => $daftarBelanja];
    }

    static function storeBelanjaanm($request, $id)
    {
    	$cekBrng = Barang::where('id_barang', $request->kode_barang)->first();
    	if($cekBrng == null)
            return 'tidakada';
        else if($cekBrng->stock == 0)
        	return 'habis';

        Barang::where('id_barang', $request->kode_barang)->update([
            'stock' => $cekBrng->stock - 1,
        ]);

        Belanjaan::create([
            'no_transaksi' => $id,
            'kode_barang' => $request->kode_barang
        ]);

        return 1;
    }

    static function destroyBelanjaanm($notrans, $barang)
    {
    	$jkBrng = Belanjaan::where('no_transaksi', $notrans)->where('kode_barang', $barang)->delete();

        $cekBrng = Barang::where('id_barang', $barang)->first();
        Barang::where('id_barang', $barang)->update([
            'stock' => $cekBrng->stock + $jkBrng,
        ]);
    }

    static function destroyBelanjaanperm($notrans, $barang)
    {
    	Belanjaan::where('no_transaksi', $notrans)->where('kode_barang', $barang)->first()->delete();
        $cekBrng = Barang::where('id_barang', $barang)->first();
        Barang::where('id_barang', $barang)->update([
            'stock' => $cekBrng->stock + 1,
        ]);
    }

    static function simpanBelanjaanm($id)
    {
    	Kasir::where('no_transaksi', $id)->update([
            'status' => 'Selesai'
        ]);

        $reportData = Kasir::with(['detailBelanjaan' => function($query){
            $query->with(['detailBarang' => function($queryy){
                $queryy->select('harga_jual', 'harga_beli', 'nama_barang', 'id_barang');
            }])->select('kode_barang', 'no_transaksi', DB::raw('COUNT(kode_barang) as jum'))->groupBy('kode_barang', 'no_transaksi');
        }])->with(['detailUserr' => function($query){
            $query->select('nama_pegawai', 'id_pegawai');
        }])->where('no_transaksi', $id)->first();

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

    static function ppHriini()
    {
    	$barangHris = Belanjaan::join('transaksi', 'barang_transaksi.no_transaksi', '=', 'transaksi.no_transaksi')
            ->join('barang', 'barang_transaksi.kode_barang', '=', 'barang.id_barang')
            ->where('transaksi.no_transaksi', 'like', '%' . date('Y-m-d') . '%')
            ->where('transaksi.status', 'Selesai')
            ->select('transaksi.*', 'barang_transaksi.*', 'barang.*')
            ->get();

        $profitHri = 0;
        $penjualanHri = 0;
        foreach ($barangHris as $barangHri) {
            $profitHri = $profitHri + ($barangHri->harga_jual - $barangHri->harga_beli);
            $penjualanHri = $penjualanHri + $barangHri->harga_jual;
        }

        return response()->json(['profit' => $profitHri, 'penjualan' => $penjualanHri]);
    }
}
