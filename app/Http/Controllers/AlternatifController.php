<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
class AlternatifController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alternatif = Alternatif::query()
            ->orderBy('nama_alternatif', 'ASC')
            ->get();
    
        return view('admin.alternatif.index', ['alternatif' => $alternatif]);
    }
    


    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required|string',
            
        ]);

        try {
            $alternatif = new Alternatif();
            $alternatif->nama_alternatif=$request ->nama_alternatif;
            $alternatif->save();

            return back()->with('msg', 'Berhasil merubah data');
        } catch (\Exception $e) {
            \Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }

    public function edit($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('admin.alternatif.edit', ['alternatif' => $alternatif]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alternatif' => 'required|string',
            
        ]);

        try {
            $alternatif = Alternatif::findOrFail($id);
            $alternatif->update([
                'nama_alternatif' => $request->nama_alternatif ,
                
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
            $alternatif = Alternatif::findOrFail($id);
            $alternatif->delete();

            return back()->with('msg', 'Berhasil menghapus data');
        } catch (\Exception $e) {
            \Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            die("Gagal");
        }
    }
}
