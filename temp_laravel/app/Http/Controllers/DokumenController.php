<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen = Dokumen::latest()->paginate(10);
        return view('dokumen.index', compact('dokumen'));
    }

    /**
     * Display a listing of the resource (Admin).
     */
    public function adminIndex()
    {
        $dokumen = Dokumen::latest()->paginate(10);
        return view('admin.dokumen.index', compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Custom check for post_max_size
        if ($request->isMethod('post') && empty($request->all()) && $request->headers->get('content-length') > 0) {
            return back()->withErrors(['file_path' => 'Ukuran file terlalu besar untuk diproses oleh server. Silakan hubungi admin untuk meningkatkan limit upload di php.ini.'])->withInput();
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'file_path' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,zip|max:20480', // Increased to 20MB in validation
            'deskripsi' => 'nullable|string',
        ], [
            'file_path.required' => 'File dokumen wajib diunggah.',
            'file_path.max' => 'Ukuran file tidak boleh lebih dari 20MB.',
            'file_path.mimes' => 'Format file harus PDF, Word, Excel, atau ZIP.',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('dokumen', 'public');
            if (!$path) {
                return back()->withErrors(['file_path' => 'Gagal menyimpan file ke server. Pastikan folder storage memiliki izin tulis.'])->withInput();
            }
            $data['file_path'] = $path;
        }

        Dokumen::create($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('admin.dokumen.edit', compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokumen = Dokumen::findOrFail($id);

        // Custom check for post_max_size
        if ($request->isMethod('put') && empty($request->all()) && $request->headers->get('content-length') > 0) {
            return back()->withErrors(['file_path' => 'Ukuran file terlalu besar untuk diproses oleh server. Silakan hubungi admin untuk meningkatkan limit upload di php.ini.'])->withInput();
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,zip|max:20480',
            'deskripsi' => 'nullable|string',
        ], [
            'file_path.max' => 'Ukuran file tidak boleh lebih dari 20MB.',
            'file_path.mimes' => 'Format file harus PDF, Word, Excel, atau ZIP.',
        ]);

        $data = $request->all();

        if ($request->hasFile('file_path')) {
            if ($dokumen->file_path) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($dokumen->file_path);
            }
            $path = $request->file('file_path')->store('dokumen', 'public');
            if (!$path) {
                return back()->withErrors(['file_path' => 'Gagal menyimpan file ke server.'])->withInput();
            }
            $data['file_path'] = $path;
        }

        $dokumen->update($data);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokumen = Dokumen::findOrFail($id);
        
        if ($dokumen->file_path) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($dokumen->file_path);
        }

        $dokumen->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus');
    }
}
