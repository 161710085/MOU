<?php

namespace App\Http\Controllers;

use App\Instansi;
use Illuminate\Http\Request;
use Session;
class InstansiController extends Controller
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
        $Instansi = Instansi::all();
        return view('Instansi.index',compact('Instansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Instansi.create');
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
            'namainstansi' => 'required|',
            'jenisinstansi' => 'required|',
            'alamat' => 'required|',
            'kota' => 'required|',
            'provinsi'=>'required',
            'kodepos'=>'required',
            'namapemimpin'=>'required',
            'jabatan'=>'required',
            'nope'=>'required',
            'email'=>'required',
            'web'=>'required',
            'fax'=>'required'
            ]);
        $Instansi = new Instansi;
        $Instansi->instansi = $request->instansi;
        $Instansi->kerjasama = $request->kerjasama;
        $Instansi->mulai = $request->mulai;
        $Instansi->berakhir = $request->berakhir;
        $Instansi->manfaat = $request->manfaat;
          $Instansi->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$Instansi->Instansi</b>"
        ]);
        return redirect()->route('Instansi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $Instansi)
    {
        $Instansi = $Instansi::findOrFail($id);
        return view('$Instansi.show',compact('$Instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $Instansi = Instansi::findOrFail($id);

        return view('Instansi.edit',compact('Instansi'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'namainstansi' => 'required|',
            'jenisinstansi' => 'required|',
            'alamat' => 'required|',
            'kota' => 'required|',
            'provinsi'=>'required',
            'kodepos'=>'required',
            'namapemimpin'=>'required',
            'jabatan'=>'required',
            'nope'=>'required',
            'email'=>'required',
            'web'=>'required',
            'fax'=>'required'  
             ]);
        $Instansi = Instansi::findOrFail($id);
        $Instansi->namainstansi = $request->namainstansi;
        $Instansi->jenisinstansi = $request->jenisinstansi;
        $Instansi->alamat = $request->alamat;
        $Instansi->kota = $request->kota;
        $Instansi->provinsi = $request->provinsi;
        $Instansi->kodepos = $request->kodepos;
        $Instansi->jabatan = $request->jabatan;
        $Instansi->nope = $request->nope;
        $Instansi->email = $request->email;
        $Instansi->web = $request->web; 
        $Instansi->fax = $request->fax;
       
       
       
        $Instansi->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$Instansi->Instansi</b>"
        ]);
        return redirect()->route('Instansi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $a = Instansi::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('Instansi.index');
    }
}
