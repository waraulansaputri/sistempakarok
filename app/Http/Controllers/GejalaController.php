<?php

namespace App\Http\Controllers;

use App\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = Gejala::all();
        return view('gejala.index', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gejala = Gejala::all();
        return view('gejala.create', compact('gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	
	
        $gejala = new Gejala();
        $gejala->id_gejala = $request->input('id_gejala');
        $gejala->nama_gejala = $request->input('nama_gejala');
        $gejala->save();

        return redirect('/gejala');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $request, $id)
    {
        $gejala = Gejala::where('id_gejala',$id)->first(); 
        return view('gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	
    	
        $gejala = Gejala::find($id); 
       $gejala->nama_gejala = $request->input('nama_gejala');
        $gejala->save();

        return redirect('/gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Gejala::find($id);
        $gejala-> delete();
        return redirect('/gejala');
    }
}
