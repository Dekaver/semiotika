<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tgl_penting;

class TglPentingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tgl = Tgl_penting::where('id_semiotika', $id)->get();
        return $tgl;
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
        Tgl_penting::create([
            'id_semiotika' => $request->id_semiotika,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tgl = Tgl_penting::find($id);
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
        $tgl = Tgl_penting::find($id)->update([
            'id_semiotika' => $request->id_semiotika,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tgl = Tgl_penting::find($id);
        $tgl->delete()
    }
}
