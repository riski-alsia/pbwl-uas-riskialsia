<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pembayaran::all();
        return view('pembayaran.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembayaran::create([
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_bayar' => $request->bulan_bayar,
            'tahun_bayar' => $request->tahun_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);
    return redirect('pembayaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pembayaran::find($id);
        return view('pembayaran.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pembayaran::findOrFail($id);
        $row->update(
            [
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_bayar' => $request->bulan_bayar,
            'tahun_bayar' => $request->tahun_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar
            ]
        );
        return redirect('pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pembayaran::findOrFail($id);
        $row->delete();
        return redirect('pembayaran');
    }
}
