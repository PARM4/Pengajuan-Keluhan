<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim'  => 'required',
        'prodi' => 'required',
        'judul' => 'required',
        'isi' => 'required',
        'bukti' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048'
    ]);

    // dd(auth()->id());


    // Upload bukti jika ada
    $fileName = null;
    if ($request->hasFile('bukti')) {
        $fileName = time().'_'.$request->bukti->getClientOriginalName();
        $request->bukti->move(public_path('bukti'), $fileName);
    }

    Pengaduan::create([
        'user_id' => auth()->id(),
        'nama' => $request->nama,
        'nim' => $request->nim,
        'prodi' => $request->prodi,
        'judul' => $request->judul,
        'isi' => $request->isi,
        'bukti' => $fileName,
        'status' => 'proses',
    ]);

    return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
}

}
