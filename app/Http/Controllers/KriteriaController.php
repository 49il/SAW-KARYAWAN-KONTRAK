<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Crips;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        $kriteria = Kriteria::orderBy('nama_kriteria', 'ASC')->get();
        return view('admin.kriteria.index', ['kriteria' => $kriteria]);
        dd($kriteria);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required|string',
            'attribut' => 'required|string',
            'bobot' => 'required|numeric' // Mengganti 'number' menjadi 'numeric'
        ]);

        try {
            $kriteria = new Kriteria();
            $kriteria->nama_kriteria = $request->nama_kriteria;
            $kriteria->attribut = $request->attribut;
            $kriteria->bobot = $request->bobot;
            $kriteria->save();

            return back()->with('msg', 'Berhasil merubah data');
        } catch (\Exception $e) {
            \Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }

    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('admin.kriteria.edit', ['kriteria' => $kriteria]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kriteria' => 'required|string',
            'attribut' => 'required|string',
            'bobot' => 'required|numeric' // Mengganti 'number' menjadi 'numeric'
        ]);

        try {
            $kriteria = Kriteria::findOrFail($id);
            $kriteria->update([
                'nama_kriteria' => $request->nama_kriteria,
                'attribut' => $request->attribut,
                'bobot' => $request->bobot
            ]);

            return back()->with('msg', 'Berhasil merubah data');
        } catch (\Exception $e) {
            \Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }

    public function destroy($id)
    {
        
        try {
            $kriteria = Kriteria::findOrFail($id);
            $kriteria->delete();

            return back()->with('msg', 'Berhasil menghapus data');
        } catch (\Exception $e) {
            \Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }
    public function show($id){
        $data['crips']=Crips::where('kriteria_id',$id)->get();
        $data['kriteria']=Kriteria::findOrFail($id);
        return view('admin.kriteria.show',$data);
    }
}
