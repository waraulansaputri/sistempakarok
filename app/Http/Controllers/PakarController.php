<?php

namespace App\Http\Controllers;

use App\Pakar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PakarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakar = Pakar::all();
        return view('pakar.index', compact('pakar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pakar = Pakar::all();
        return view('pakar.create', compact('pakar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$file = $request->file('foto');
 
	$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'foto';
	$file->move($tujuan_upload,$nama_file);
	
        $pakar = new Pakar();
        $pakar->nama = $request->input('nama');
        $pakar->no_hp = $request->input('no_hp');
        $pakar->alamat = $request->input('alamat');
        $pakar->foto = $nama_file;
        $pakar->save();

        return redirect('/pakar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pakar  $pakar
     * @return \Illuminate\Http\Response
     */
    public function show(Pakar $pakar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pakar  $pakar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pakar $request, $id)
    {
        $pakar = Pakar::where('id_pakar',$id)->first(); 
        return view('pakar.edit', compact('pakar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pakar  $pakar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	
    	if($request->file('foto')!=''){
    	$file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);
		}else{
			$nama_file = $request->input('foto2');
		}
		
		
        $pakar = Pakar::find($id); 
        $pakar->nama = $request->input('nama');
        $pakar->no_hp = $request->input('no_hp');
        $pakar->alamat = $request->input('alamat');
        $pakar->foto = $nama_file;
        $pakar->save();

        return redirect('/pakar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pakar  $pakar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pakar = Pakar::find($id);
        $pakar-> delete();
        return redirect('/pakar');
    }
}
