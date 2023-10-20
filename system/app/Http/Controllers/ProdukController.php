<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_produk'] = Produk::all();

        return view('produk.index', $data);
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
    public function storeproduk(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = request('nama_produk');
        $produk->jenis = request('jenis');
        $produk->jumlah = request('jumlah');
        $produk->handleUploadFotoProduk();
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showproduk($id)
    {
        $data['produk'] = Produk::find($id);
        return view('produk.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduk($id)
    {
        $data['produk'] = Produk::find($id);

        return view('produk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateproduk(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_produk = request('nama_produk');
        $produk->jenis = request('jenis');
        $produk->jumlah = request('jumlah');
        $produk->handleUploadFotoproduk();
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');
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
