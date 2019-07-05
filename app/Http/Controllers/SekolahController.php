<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        $Response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'berhasil'
        ];
        return response()->json($Response, 200);
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
        $sekolah = new sekolah;
        $sekolah->nama = $request->nama;
        $sekolah->kelas  = $request->kelas;
        $sekolah->pelatih = $request->pelatih;
        $sekolah->ekskul  = $request->ekskul;
        $sekolah->kejuruan = $request->kejuruan;
        $sekolah->save();
        $response = [
            'success' => true,
            'data' => $sekolah,
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
        $sekolah = Sekolah::findOrFail($id);
        $response = [
            'susccess' => true,
            'data' => $sekolah,
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
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->nama = $request->nama;
        $sekolah->kelas = $request->kelas;
        $sekolah->pelatih  = $request->pelatih;
        $sekolah->ekskul = $request->ekskul;
        $sekolah->kejuruan = $request->kejuruan;
        $sekolah->save();
        $Response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'berhasil'
        ];
        return response()->json($Response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekolah = Sekolah::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
