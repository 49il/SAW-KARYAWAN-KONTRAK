<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;

class AlgoritmaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alternatif = Alternatif::with('penilaian.crips')->get();
        $kriteria = Kriteria::with('crips')->orderBy('nama_kriteria', 'ASC')->get();
        $penilaian = Penilaian::with('crips','alternatif')->get();

        if ($penilaian->count() == 0) {
            return redirect(route('penilaian.index'));
        }

        // Mencari min max
        
        foreach ($kriteria as $key => $value) {
            foreach ($penilaian as $key_1 => $value_1) {
                if ($value->id == $value_1->crips->kriteria_id) {
                    if ($value->attribut == 'Benefit') {
                        $minMax[$value->id]['max'] = max($minMax[$value->id]['max'] ?? 0, $value_1->crips->bobot);
                    } elseif ($value->attribut == 'Cost') {
                        $minMax[$value->id]['min'] = min($minMax[$value->id]['min'] ?? INF, $value_1->crips->bobot);
                    }
                }
            }
        }
        
       
        foreach ($penilaian as $key_1 => $value_1) {
            foreach ($kriteria as $key => $value) {
                if ($value->id == $value_1->crips->kriteria_id) {
                    if ($value->attribut == 'Benefit') {
                        $maxValue = $minMax[$value->id]['max'];
                        $normalisasi[$value_1->alternatif->nama_alternatif][$value->id] = $value_1->crips->bobot / $maxValue;
                    } elseif ($value->attribut == 'Cost') {
                        $minValue = $minMax[$value->id]['min'];
                        $normalisasi[$value_1->alternatif->nama_alternatif][$value->id] = $minValue / $value_1->crips->bobot;
                    }
                }
            }
        }
        
        
        foreach ($normalisasi as $key => $value) {
            foreach ($kriteria as $key_1 => $value_1) {
                $rank[$key][] = $value[$value_1->id] * $value_1->bobot;
            }
        }
        
        
        
        $ranking=$normalisasi;
        foreach ($normalisasi as $key => $value) {
            $ranking[$key][] = array_sum($rank[$key]);
        }
        arsort($ranking);;
        



            
        return view('admin.perhitungan.index', compact('alternatif', 'kriteria', 'normalisasi','ranking'));
    }
}