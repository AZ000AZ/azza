<?php

namespace App\Http\Controllers;

use App\Models\Kirtasiye;
use Illuminate\Http\Request;

//index -
class KirtasiyeController extends Controller
{
    public function index()
    {
        $urunler = Kirtasiye::all();

        return view('urunler')->with('urunler',$urunler);
    }
}
