<?php

namespace App\Http\Controllers;

use App\hasil;
use Illuminate\Http\Request;
use Session;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
class HasilController extends Controller
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
         $hasil = hasil::all();
        return view('hasil.index',compact('hasil'));
   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hasil.create');


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
        $hasil = new hasil;
        $hasil->keterangan = $request->keterangan;
      
          $hasil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$hasil->hasil</b>"
        ]);
        return redirect()->route('hasil.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function show(hasil $hasil,$id)
    {
        $hasil = hasil::findOrFail($id);
        return view('hasil.show',compact('hasil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $hasil = hasil::findOrFail($id);

        return view('hasil.edit',compact('hasil'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'keterangan' => 'required|'
             ]);
        $hasil = hasil::findOrFail($id);
        $hasil->keterangan = $request->keterangan;
       
        $hasil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$hasil->hasil</b>"
        ]);
        return redirect()->route('hasil.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hasil  $hasil
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $a = hasil::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('hasil.index');
    }
}
