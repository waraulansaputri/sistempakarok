<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyakit;
use App\Pakar;
use App\Gejala;
use App\gejalaPenyakit;
use App\RekamMedik;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Auth;

class diagnosaController extends Controller
{
    public function index(){
    	return view('home');
    }
    public function logout(Request $request)
	{
	    Auth::logout();
	 
	    $request->session()->invalidate();
	 
	    $request->session()->regenerateToken();
	 
	    return redirect('/');
	}
    public function front(){
    	
    	$pakar = Pakar::take(3)->get();
    	return view('front', compact('pakar'));
    }
    public function tentang(){
    	return view('tentang');
    }
    
     public function login_pasien(){
    	return view('login');
    }

	 public function registrasi(){
    	return view('registrasi');
    }
    public function registrasi_store(Request $request)
    {
        $users = new RekamMedik();
        $users->nama = $request->input('nama');
        $users->no_hp = $request->input('no_hp');
        $users->alamat = $request->input('alamat');
        $users->username = $request->input('username');
        $users->password = Hash::make($request->input('password'));
        $users->tanggal_konsultasi = date("Y-m-d");
        $users->save();

        return redirect('/login_pasien')->with(['success' => 'Berhasil Melakukan Pendaftaran!']);
    }
    public function login_post(Request $request)
	{   
	    $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->guard('rekammedik')->attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            return redirect('diagnostic');
        } else {
         
            return redirect('/login_pasien')->with(['loginError' => 'Username atau Password salah!']);
        }
	 
	}
    public function preDiagnostic(){
    	if(Auth::guard('rekammedik')->check()){
    	$Gejala = Gejala::all();
    	return view('prediagnostic', compact('Gejala'));
		}
    	else{
		return redirect('/login_pasien')->with(['errorLogin' => 'Anda Harus Login Untuk Melakukan Konsultasi!']);	
		}
    }

    public function start(Request $request){
    	$diagnosa = [];
    	$data = Penyakit::with('gejalaPenyakit')->get();
    	
    	foreach($data as $key => $data) {
    		$jumlah_gejala = $data->gejalaPenyakit->count();
    		$gejala = 0;
    		foreach($request->id_gejala as $inputGejala) {
    			$flagGejala = gejalaPenyakit::where('id_penyakit',$data->id_penyakit)->where('id_gejala',$inputGejala)->first();
    			if($flagGejala){
    				$gejala = $gejala + 1;
    			}
    		}
    		$skor = ($gejala / $jumlah_gejala) * 100;
    		if(($skor <= 100) and ($skor > 0)){
    			$diagnosa[$key] = [
    				'nama_penyakit' => $data->nama_penyakit,
    				'solusi' => $data->solusi,
    				'id_penyakit' => $data->id_penyakit,
    				'skor' => $skor
    			];
    		}
    	}
    	return view('postdiagnostic', compact('diagnosa'));
    }
    public function gejalaList($id){
        $gejala = gejalaPenyakit::where('id_penyakit',$id)->latest()->get();
        return DataTables::of($gejala)->make(true);
    }
    public function penyakit($id)
    {
        $item = Penyakit::find($id);
        return view('penyakit', compact('item'));
    }
    public function daftarPenyakit($id){
    	$penyakit = Penyakit::get();
    	return view('daftarPenyakit', compact('penyakit'));
    }
}
