<?php

namespace App\Http\Controllers;

use App\GejalaPenyakit;
use App\Gejala;
use App\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class GejalaPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejalapenyakit = GejalaPenyakit::all();
        return view('gejalapenyakit.index', compact('gejalapenyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $gejala = Gejala::all();
       $penyakit = Penyakit::all();
        return view('gejalapenyakit.create', compact('gejala','penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$cek = GejalaPenyakit::where('id_gejala', $request->input('id_gejala'))->where('id_penyakit', $request->input('id_penyakit'))->first();
    	if($cek==NULL){
		
        $gejalapenyakit = new GejalaPenyakit();
        $gejalapenyakit->id_gejala = $request->input('id_gejala');
        $gejalapenyakit->id_penyakit = $request->input('id_penyakit');
        $gejalapenyakit->save();
			
		}else{
			Session::flash('message', 'Gagal Input, Data Duplikat!'); 
			Session::flash('alert-class', 'alert-danger'); 
		}
        return redirect('/gejalapenyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GejalaPenyakit  $gejalapenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(GejalaPenyakit $gejalapenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GejalaPenyakit  $gejalapenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(GejalaPenyakit $request, $id)
    {
    	
    	$gejala = Gejala::all();
       $penyakit = penyakit::all();
        $gejalapenyakit = GejalaPenyakit::where('id',$id)->first(); 
        return view('gejalapenyakit.edit', compact('gejalapenyakit','gejala','penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GejalaPenyakit  $gejalapenyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$cek = GejalaPenyakit::where('id_gejala', $request->input('id_gejala'))->where('id_penyakit', $request->input('id_penyakit'))->first();
    	if($cek==NULL){
		
        $gejalapenyakit = GejalaPenyakit::find($id); 
         $gejalapenyakit->id_gejala = $request->input('id_gejala');
        $gejalapenyakit->id_penyakit = $request->input('id_penyakit');
        $gejalapenyakit->save();
}else{
			Session::flash('message', 'Gagal Input, Data Duplikat!'); 
			Session::flash('alert-class', 'alert-danger'); 
		}
        return redirect('/gejalapenyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GejalaPenyakit  $gejalapenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejalapenyakit = GejalaPenyakit::find($id);
        $gejalapenyakit-> delete();
        return redirect('/gejalapenyakit');
    }
}
