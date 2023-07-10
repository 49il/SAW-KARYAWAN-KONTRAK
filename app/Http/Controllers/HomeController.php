<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Kriteria;
use App\Models\Penilaian;

class HomeController extends Controller
{
    public function generateSPKPDF()
    {
        
            $kriteria = Kriteria::all();
            $penilaian = Penilaian::all();
            $minMax = [];
            $normalisasi = [];
            $rank = [];
            $ranking = [];
        
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
        
            $ranking = $normalisasi;
            foreach ($normalisasi as $key => $value) {
                $ranking[$key][] = array_sum($rank[$key]);
            }
            arsort($ranking);
        
            $data = [
                'ranking' => $ranking
            ];
        
            $pdf = \PDF::loadView('admin.pdf.spk', $data);
        
            return $pdf->download('laporan_spk.pdf');
        
        
    }

    public function __construct()
    {
        $this->middleware('auth');//sudah terotentikasi (login) sebelum dapat mengakses fungsi index()
    }

    public function index()
    {
        return view('home');//jika berhasil login akan ke sini(home.blade)
    }
}
