<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_AboutUs'] = About::all();

        return view('AboutUs.index', $data);
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
    public function StoreAboutUs(Request $request)
    {
        $AboutUs = new About();
        $AboutUs->judul = request('judul');
        $AboutUs->isi = request('isi');
        $AboutUs->handleUploadFotoAboutUs();
        $AboutUs->save();

        return redirect('admin/AboutUs')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowAboutUs($id)
    {
        $data['AboutUs'] = About::find($id);
        return view('AboutUs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditAboutUs($id)
    {
        $data['AboutUs'] = About::find($id);

        return view('AboutUs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateAboutUs(Request $request, $id)
    {
        $AboutUs = About::find($id);
        $AboutUs->judul = request('judul');
        $AboutUs->isi = request('isi');
        $AboutUs->handleUploadFotoAboutUs();
        $AboutUs->save();

        return redirect('admin/AboutUs')->with('success', 'Data Berhasil Diedit');
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
