<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_kontak'] = Kontak::all();

        return view('kontak.index', $data);
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
    public function storekontak(Request $request)
    {
        $kontak = new Kontak();
        $kontak->email = request('email');
        $kontak->no_hp = request('no_hp');
        $kontak->instagram = request('instagram');
        $kontak->alamat = request('alamat');
        $kontak->handleUploadFotokontak();
        $kontak->save();

        return redirect('admin/kontak')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkontak($id)
    {
        $data['kontak'] = Kontak::find($id);
        return view('kontak.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkontak($id)
    {
        $data['kontak'] = Kontak::find($id);

        return view('kontak.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatekontak(Request $request, $id)
    {
        $kontak = Kontak::find($id);
        $kontak->email = request('email');
        $kontak->no_hp = request('no_hp');
        $kontak->instagram = request('instagram');
        $kontak->alamat = request('alamat');
        $kontak->handleUploadFotokontak();
        $kontak->save();

        return redirect('admin/kontak')->with('success', 'Data Berhasil Diedit');
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
