<?php

namespace App\Http\Controllers;

use App\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakit = Penyakit::all();
        return view('penyakit.index', compact('penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	
	
        $penyakit = new Penyakit();
        $penyakit->id_penyakit = $request->input('id_penyakit');
        $penyakit->nama_penyakit = $request->input('nama_penyakit');
        $penyakit->solusi = $request->input('solusi');
        $penyakit->save();

        return redirect('/penyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $request, $id)
    {
        $penyakit = Penyakit::where('id_penyakit',$id)->first(); 
        return view('penyakit.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	
		
        $penyakit = Penyakit::find($id); 
        $penyakit->nama_penyakit = $request->input('nama_penyakit');
        $penyakit->solusi = $request->input('solusi');
        $penyakit->save();

        return redirect('/penyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyakit = Penyakit::find($id);
        $penyakit-> delete();
        return redirect('/penyakit');
    }
}
