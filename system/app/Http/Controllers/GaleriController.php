<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_galeri'] = Galeri::all();

        return view('galeri.index', $data);
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
    public function storegaleri(Request $request)
    {
        $galeri = new Galeri();
        $galeri->judul = request('judul');
        $galeri->kegiatan = request('kegiatan');
        $galeri->tanggal = request('tanggal');
        $galeri->handleUploadFotoGaleri();
        $galeri->save();

        return redirect('admin/galeri')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showgaleri($id)
    {
        $data['galeri'] = Galeri::find($id);
        return view('galeri.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editgaleri($id)
    {
        $data['galeri'] = Galeri::find($id);

        return view('Galeri.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updategaleri(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $galeri->judul = request('judul');
        $galeri->kegiatan = request('kegiatan');
        $galeri->tanggal = request('tanggal');
        $galeri->handleUploadFotoGaleri();
        $galeri->save();

        return redirect('admin/galeri')->with('success', 'Data Berhasil Diedit');
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
