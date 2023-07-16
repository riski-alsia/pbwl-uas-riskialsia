<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Spp::all();
        return view('spp.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
        ]);
    return redirect('spp');
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
        $row = Spp::find($id);
        return view('spp.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Spp::findOrFail($id);
        $row->update(
            [
                'tahun' => $request->tahun,
                'nominal' => $request->nominal
            ]
        );
        return redirect('spp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Spp::findOrFail($id);
        $row->delete();
        return redirect('spp');
    }
}
