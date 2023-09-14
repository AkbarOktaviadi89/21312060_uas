<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Npm21312060;
use RealRashid\SweetAlert\Facades\Alert;

class Npm21312060Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $npm21312060 = Npm21312060::all();
        return view('fNpm21312060.index', compact('npm21312060'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fNpm21312060.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $npm21312060 = new Npm21312060;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $npm21312060->npm = $request->npm;
        $npm21312060->nama = $request->nama;
        $npm21312060->alamat = $request->alamat;

        $simpan = $npm21312060->save();

        if ($simpan) {
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/fNpm21312060');
        } else {
            Alert::error('Failed', 'Gagal menambahkan data');
        }
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
        $npm21312060 = Npm21312060::where('id', $id)->first();
        return view('fNpm21312060.edit', compact('npm21312060'));
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
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);



        $npm21312060 = Npm21312060::find($id);

        $npm21312060->npm = $request->npm;
        $npm21312060->nama = $request->nama;
        $npm21312060->alamat = $request->alamat;

        $ubah = $npm21312060->save();

        if ($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/fNpm21312060');
        } else {
            Alert::error('Failed', 'Gagal Mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $npm21312060 = Npm21312060::find($id);
        $remove = $npm21312060->delete();
        if ($remove) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/fNpm21312060');
        } else {
            Alert::error('Failed', 'Gagal Menghapus data');
        }
    }
}
