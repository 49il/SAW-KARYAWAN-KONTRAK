<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PenilaianController extends Controller
{
    public function index()
    {
        
        $alternatif = Alternatif::with('penilaian.crips')->get();
        $kriteria = Kriteria::with('crips')->orderBy('nama_kriteria', 'ASC')->get();
        //  return response()->json($kriteria);
        return view('admin.penilaian.index', compact('alternatif', 'kriteria'));
    }

    public function store(Request $request)
    
    {
      
        
        try {
            Penilaian::truncate();

            
       

            foreach ($request->crips_id as $key => $value) {
                foreach ($value as $key_1 => $value_1) {
                    Penilaian::create([
                        'alternatif_id' => $key,
                        'crips_id' => $value_1
                    ]);
                }
            }

            return back()->with('msg', 'Berhasil disimpan');
        } catch (\Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }
}
