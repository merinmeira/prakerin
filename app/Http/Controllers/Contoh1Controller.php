<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contoh1;

class Contoh1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contoh = Contoh1::all();
        $response = [
            'susccess' => true,
            'data' => $contoh,
            'message' => 'berhasil'

        ];
        return response()->json($response, 200);
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
        $contoh = new Contoh1;
        $contoh->nama = $request->nama;
        $contoh->umur = $request->umur;
        $contoh->hobi  = $request->hobi;
        $contoh->alamat = $request->alamat;
        $contoh->cita = $request->cita;
        $contoh->save();
        $response = [
            'success' => true,
            'data' => $contoh,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contoh = Contoh1::findOrFail($id);
        $response = [
            'susccess' => true,
            'data' => $contoh,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        $contoh = Contoh1::findOrFail($id);
        $contoh = new Contoh1;
        $contoh->nama = $request->nama;
        $contoh->umur = $request->umur;
        $contoh->hobi  = $request->hobi;
        $contoh->alamat = $request->alamat;
        $contoh->cita = $request->cita;
        $contoh->save();
        $response = [
            'success' => true,
            'data' => $contoh,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contoh = Contoh1::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $contoh,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
