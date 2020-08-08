<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index() {
    	$pertanyaan = DB::table('pertanyaan')->get(); // select * from pertanyaan
    	//dd($pertanyaan);
    	return view('Pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
    	return view('Pertanyaan.create');
    }

    public function store(Request $request) {
    	//dd($request->all());
    	$request->validate([
    		'judul' => 'required|unique:pertanyaan',
    		'isi' => 'required'
    	]);
    	DB::table('pertanyaan')->insert([
    		'judul' => $request->judul,
    		'isi' => $request->isi
    	]);

    	return redirect('/pertanyaan');
    }

    public function show($id) {
    	$tanya = DB::table('pertanyaan')->where('id', $id)->first();
    	//dd($post);
    	return view('pertanyaan.show', compact('tanya'));
    }

    public function edit($id) {
    	$tanya = DB::table('pertanyaan')->where('id', $id)->first();

    	return view('pertanyaan.edit', compact('tanya'));
    }

    public function update($id, Request $request) {
    	$request->validate([
    		'judul' => 'required|unique:pertanyaan',
    		'isi' => 'required'
    	]);

    	DB::table('pertanyaan')
    				->where('id', $id)
    				->update([
    					'judul' => $request->judul,
    					'isi' => $request->isi
    				]);

    	return redirect('/pertanyaan')->with('success', 'Berhasil update!');
    }

    public function destroy($id) {
    	$query = DB::table('pertanyaan')->where('id', $id)->delete();
    	return redirect('/pertanyaan')->with('success', 'Berhasil delete!');
    }
}
