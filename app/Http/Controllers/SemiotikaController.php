<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semiotika;

class SemiotikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semiotika = Semiotika::all();
        return view('admin.semiotika.semiotika', compact('semiotika'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.semiotika.semiotika_create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Semiotika::create([
            'periode' => $request->periode,
            'lokasi' => $request->alamat,
            'gps' => $request->latitude ." ". $request->longitude,
            'waktu' => $request->waktu,
            'Tanggal' => $request->tanggal,
            'Tentang' => $request->tentang,
            'deskripsi_pendaftaraan' => $request->deskripsi,
            'link_pendaftaraan' => $request->link,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semiotika = Semiotika::find($id);
        return view('admin.semiotika.semiotika_view', compact('semiotika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semiotika = Semiotika::find($id);
        return view('admin.semiotika.semiotika_edit_form', compact('semiotika'));
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
        Semiotika::find($id)->update([
            'periode' => $request->periode,
            'lokasi' => $request->alamat,
            'gps' => $request->latitude ." ". $request->longitude,
            'waktu' => $request->waktu,
            'Tanggal' => $request->tanggal,
            'Tentang' => $request->tentang,
            'deskripsi_pendaftaraan' => $request->deskripsi,
            'link_pendaftaraan' => $request->link,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semiotika = Semiotika::find($id);
        $semiotika->delete();

        return redirect()->back();
    }
}
