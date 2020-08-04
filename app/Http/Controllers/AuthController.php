<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
    	return view('register');
    }

    public function sukses()
    {
    	//dd($request->all());
    	//$nama_depan = $request["nama_depan"];
    	//$nama_belakang = $request["nama_belakang"];
    	return view('masuk');
    }
    
    public function sukses_post(Request $request)
    {
    	$nama_depan=$request["first_name"];
    	$nama_belakang=$request["last_name"];
    	echo "<h1>Selamat Datang $nama_depan $nama_belakang</h1>";
    	return view('masuk');
    }
}
