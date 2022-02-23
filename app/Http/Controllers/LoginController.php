<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {


    	// mengirim data pegawai ke view index
    	return view('index');

    }
}
