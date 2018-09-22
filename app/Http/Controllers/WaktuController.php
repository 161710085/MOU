<?php

namespace App\Http\Controllers;

use App\waktu;
use Illuminate\Http\Request;
use Session;
class WaktuController extends Controller
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
        $waktu = waktu::all();
        return view('waktu.index',compact('waktu'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('waktu.create');
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
            'mulai' => 'required|',
            'berakhir' => 'required|'
                 
            ]);
        $waktu = new waktu;
        $waktu->mulai = $request->mulai;
        $waktu->berakhir = $request->berakhir;
      
          $waktu->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$waktu->waktu</b>"
        ]);
        return redirect()->route('waktu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function show(waktu $waktu,$id)
    {
        $waktu = waktu::findOrFail($id);
        return view('waktu.show',compact('waktu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $waktu = waktu::findOrFail($id);

        return view('waktu.edit',compact('waktu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'mulai' => 'required|',
            'berakhir' => 'required|'
             ]);
        $waktu = waktu::findOrFail($id);
        $waktu->mulai = $request->mulai;
        $waktu->berakhir = $request->berakhir;
       
        $waktu->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$waktu->waktu</b>"
        ]);
        return redirect()->route('waktu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $a = waktu::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('waktu.index');
    }
}
