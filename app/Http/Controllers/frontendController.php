<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hasil;
use App\Instansi;
use App\kerjasama;
class frontendController extends Controller
{
    public function index()
    {
            $Instansi=Instansi::all();
            return view('frontend.index',compact('Instansi'));
    }
}
