<?php

namespace App\Http\Controllers;

use App\Models\HasilMinat;
use App\Models\Jarkom;
use App\Models\Kwc;
use App\Models\MinatBakat;
use App\Models\ProfesiKerja;
use App\Models\Rpl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        return view('main-layout.page.index');
    }

    public function nilaiMahasiswa()
    {   
        $jarkom = Jarkom::all();
        $rpl = Rpl::all();
        $kwc = Kwc::all();
        return view('main-layout.page.daftar-nilai', [
            'jarkom'    => $jarkom,
            'rpl'       => $rpl,
            'kwc'       => $kwc,
        ]);
    }

    public function inputPeminatan()
    {   
        $profesi = ProfesiKerja::all();
        $minat = MinatBakat::all();
        return view('main-layout.page.input-minat',[
            'profesi'    => $profesi,
            'minat'      => $minat,
        ]);
    }
    
    public function simpanPeminatan(Request $request)
    {
        $nimMhs = $request->nim;

        $nimMhsJarkom = Jarkom::where('nim', $nimMhs)->first();
        $nimMhsRpl = Rpl::where('nim', $nimMhs)->first();
        $nimMhsKwc = Kwc::where('nim', $nimMhs)->first();

        if(!$nimMhsJarkom || !$nimMhsKwc || !$nimMhsRpl){
            echo "nim tidak ada !"; 
        }else{
                $jarkom = Jarkom::pluck('jumlah');
                $kwc = Kwc::pluck('jumlah');
                $rpl = Rpl::pluck('jumlah');
                $kerja = ProfesiKerja::pluck('nilai');
                $bakat = MinatBakat::pluck('nilai');

                $n = count($jarkom);  
                $minJarkom = $jarkom[0];
                    for ($i = 1; $i < $n; $i++)  
                        if ($minJarkom > $jarkom[$i]) 
                            $minJarkom = $jarkom[$i]; 


                $o = count($kwc);  
                $minKwc = $kwc[0];
                    for ($i = 1; $i < $o; $i++)  
                            if ($minKwc > $kwc[$i]) 
                                $minKwc = $kwc[$i]; 


                $p = count($rpl);  
                $minRpl = $rpl[0];                
                    for ($i = 1; $i < $p; $i++)  
                        if ($minRpl > $rpl[$i]) 
                            $minRpl = $rpl[$i]; 


                $q = count($kerja);  
                $maxKerja = $kerja[0];                
                    for ($i = 1; $i < $q; $i++)  
                        if ($maxKerja < $kerja[$i]) 
                            $maxKerja = $kerja[$i]; 


                $r = count($bakat);  
                $maxBakat = $bakat[0];                
                    for ($i = 1; $i < $r; $i++)  
                        if ($maxBakat < $bakat[$i]) 
                            $maxBakat = $bakat[$i]; 
                              

                $normalisasiJarkom = $minJarkom / $nimMhsJarkom->jumlah;
                $normalisasiRpl = $minRpl / $nimMhsRpl->jumlah;
                $normalisasiKwc = $minKwc / $nimMhsKwc->jumlah;
                $normalisasiKerja = $maxKerja / $request->profesi_kerja;
                $normalisasiBakat = $maxBakat / $request->minat_bakat;

                // Proses perkalian untuk peminatan
                $mkRpl = 3 / 19;
                $mkKwc = 3 / 19;
                $mkJarkom = 3 / 19;
                $profesiKarirKerja = 5 / 19;
                $profesiMinatBakat = 5 / 19;

                $hasilMatkulRpl = $mkRpl * $normalisasiRpl + $profesiKarirKerja * $normalisasiKerja + $profesiMinatBakat * $normalisasiBakat;
                $hasilMatkulKwc = $mkKwc * $normalisasiKwc + $profesiKarirKerja * $normalisasiKerja + $profesiMinatBakat * $normalisasiBakat;
                $hasilMatkulJarkom = $mkJarkom * $normalisasiJarkom + $profesiKarirKerja * $normalisasiKerja + $profesiMinatBakat * $normalisasiBakat; 

                $arrHasil = array($hasilMatkulRpl, $hasilMatkulKwc, $hasilMatkulJarkom);

                $s = count($arrHasil);  
                $maxHasil = $arrHasil[0]; 
                    for ($i = 1; $i < $s; $i++)  
                        if ($maxHasil < $arrHasil[$i]) 
                            $maxHasil = $arrHasil[$i];    
         
                $hasilPeminatan = new HasilMinat();
                $hasilPeminatan->nim = $request->nim;
                $hasilPeminatan->nama_mhs = $request->nama_mahasiswa;

                if($maxHasil == $hasilMatkulJarkom){
                    $hasilPeminatan->hasil_peminatan = "Jarkom";
                }elseif($maxHasil == $hasilMatkulRpl){
                    $hasilPeminatan->hasil_peminatan = "RPL";
                }else{
                    $hasilPeminatan->hasil_peminatan = "KWC";
                }                  

                $hasilPeminatan->save();
                return redirect()->route('data.minat');
        }

    }

    
    public function dataPeminatanMahasiswa()
    {   
        $hasilMinat = HasilMinat::all();
        return view('main-layout.page.data-peminatan',[
            'hasilMinat'    => $hasilMinat,
        ]);
    }

    
}
