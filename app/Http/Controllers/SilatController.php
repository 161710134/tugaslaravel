<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Silat;
class SilatController extends Controller
{
    //
    public function index2()
{ 
	$silat = Silat::all();
	return view('tabel',compact('silat'));
}
}
