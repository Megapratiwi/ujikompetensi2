<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_klien'] = Klien::all();

        return view('klien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeklien(Request $request)
    {
        $klien = new Klien();
        $klien->nama = request('nama');
        $klien->isi = request('isi');
        $klien->pekerjaan = request('pekerjaan');
        $klien->handleUploadFotoKlien();
        $klien->save();

        return redirect('admin/klien')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showklien($id)
    {
        $data['klien'] = Klien::find($id);
        return view('klien.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editklien($id)
    {
        $data['klien'] = Klien::find($id);

        return view('klien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateklien(Request $request, $id)
    {
        $klien = Klien::find($id);
        $klien->nama = request('nama');
        $klien->isi = request('isi');
        $klien->pekerjaan = request('pekerjaan');
        $klien->handleUploadFotoKlien();
        $klien->save();

        return redirect('admin/klien')->with('success', 'Data Berhasil Diedit');
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
