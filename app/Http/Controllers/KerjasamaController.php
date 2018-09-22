<?php

namespace App\Http\Controllers;

use App\kerjasama;
use Illuminate\Http\Request;
use Session;
class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Kerjasama = Kerjasama::all();
        return view('Kerjasama.index',compact('Kerjasama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kerjasama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'keterangan' => 'required|'
                 
            ]);
        $Kerjasama = new Kerjasama;
        $Kerjasama->keterangan = $request->keterangan;
      
          $Kerjasama->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$Kerjasama->Kerjasama</b>"
        ]);
        return redirect()->route('Kerjasama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $Kerjasama = Kerjasama::findOrFail($id);
        return view('Kerjasama.show',compact('Kerjasama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function edit(kerjasama $kerjasama)
    {
        $Kerjasama = Kerjasama::findOrFail($id);

        return view('Kerjasama.edit',compact('Kerjasama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'keterangan' => 'required|'
             ]);
        $Kerjasama = Kerjasama::findOrFail($id);
        $Kerjasama->keterangan = $request->keterangan;
       
        $Kerjasama->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$Kerjasama->Kerjasama</b>"
        ]);
        return redirect()->route('Kerjasama.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $a = Kerjasama::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('Kerjasama.index');
    }
}
