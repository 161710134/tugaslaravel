<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Silat;
class AboutController extends Controller
{
    //
    public function index1()
{
	return view('galeri');
}
public function index3()
{
	return view('paragraph');
}
public function index4()
{
	return view('psn');
}
public function index5()
{
	return view('spc');
}
}
