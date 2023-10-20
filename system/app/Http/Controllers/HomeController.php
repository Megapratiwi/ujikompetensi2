<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Admin;
use App\Models\Artikel;
use App\Models\Event;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('index');
    }

    public function showLanding()
    {
        $data['list_AboutUs'] = About::all();
        $data['list_produk'] = Produk::all();
        $data['list_galeri'] = Galeri::all();
        $data['list_artikel'] = Artikel::all();
        $data['list_kontak'] = Kontak::all();
        $data['list_event'] = Event::all();
        return view('template.landing', $data);
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
        //
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
}
