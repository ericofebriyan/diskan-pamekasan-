<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource (Public).
     */
    public function index()
    {
        $agenda = \App\Models\Agenda::latest()->paginate(10);
        return view('agenda.index', compact('agenda'));
    }

    /**
     * Display a listing of the resource (Admin).
     */
    public function adminIndex()
    {
        $agenda = \App\Models\Agenda::latest()->paginate(10);
        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        \App\Models\Agenda::create($request->all());

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agenda = \App\Models\Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agenda = \App\Models\Agenda::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $agenda->update($request->all());

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = \App\Models\Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil dihapus');
    }
}
