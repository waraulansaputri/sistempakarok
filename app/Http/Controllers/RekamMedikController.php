<?php

namespace App\Http\Controllers;

use App\RekamMedik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RekamMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekam_medik = RekamMedik::all();
        return view('rekam_medik.index', compact('rekam_medik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekam_medik = RekamMedik::all();
        return view('rekam_medik.create', compact('rekam_medik'));
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
	
        $rekam_medik = new RekamMedik();
        $rekam_medik->name = $request->input('name');
        $rekam_medik->email = $request->input('email');
        $rekam_medik->password = Hash::make($request->input('password'));
        $rekam_medik->foto = $nama_file;
        $rekam_medik->save();

        return redirect('/rekam_medik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RekamMedik  $rekam_medik
     * @return \Illuminate\Http\Response
     */
    public function show(RekamMedik $rekam_medik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekamMedik  $rekam_medik
     * @return \Illuminate\Http\Response
     */
    public function edit(RekamMedik $request, $id)
    {
        $rekam_medik = RekamMedik::where('id',$id)->first(); 
        return view('rekam_medik.edit', compact('rekam_medik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekamMedik  $rekam_medik
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
		
		
        $rekam_medik = RekamMedik::find($id); 
         $rekam_medik->name = $request->input('name');
        $rekam_medik->email = $request->input('email');
        $rekam_medik->foto = $nama_file;
        $rekam_medik->save();

        return redirect('/rekam_medik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekamMedik  $rekam_medik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekam_medik = RekamMedik::find($id);
        $rekam_medik-> delete();
        return redirect('/rekam_medik');
    }
}
