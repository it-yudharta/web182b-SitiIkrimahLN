<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = siswa::paginate(10);
        return view('siswa.index',['siswas' =>$item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item= new Siswa;
        $item->nama=$request['nama'];
        $item->alamat=$request['alamat'];
        $item->jurusan=$request['jurusan'];
        $item->jenisKelamin=$request['jenisKelamin'];
        $item->save();

        return redirect()->back()->with('siswa','Data Tersimpan');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Siswa;
        $item->nama=$request['nama'];
        $item->alamat=$request['alamat'];
        $item->jurusan=$request['jurusan'];
        $item->jenisKelamin=$request['jenisKelamin'];
        $item->save();

        return redirect('siswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        $item = Siswa::paginate(10);

        return view('siswa.show', ['siswas' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Siswa::find($id);

        return view('siswa.edit',['siswas' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = siswa::find($id);
        $item->nama = $request['nama'];
        $item->alamat= $request['alamat'];
        $item->jurusan= $request['jurusan'];
        $item->jenisKelamin = $request['jenisKelamin'];
        $item->update();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        $item = Siswa::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}
