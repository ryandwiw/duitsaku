<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
        public function index()
    {
        $keuangans = Keuangan::all();
        $totalPemasukan = Keuangan::where('jenis', 'pemasukan')->sum('nominal');
        $totalPengeluaran = Keuangan::where('jenis', 'pengeluaran')->sum('nominal');
        return view('keuangan.index', compact('keuangans', 'totalPemasukan', 'totalPengeluaran'));
    }

    public function create()
    {
        return view('keuangan.create');
    }

    public function store(Request $request)
    {
        Keuangan::create($request->all());
        return redirect()->route('keuangan.index');
    }

    public function edit(Keuangan $keuangan)
    {
        return view('keuangan.edit', compact('keuangan'));
    }

    public function update(Request $request, Keuangan $keuangan)
    {
        $keuangan->update($request->all());
        return redirect()->route('keuangan.index');
    }

    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
        return redirect()->route('keuangan.index');
    }
}
