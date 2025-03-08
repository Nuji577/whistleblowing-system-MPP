<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.index'); // Sesuaikan dengan nama file blade kamu
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jenispelanggaran' => 'required',
            'indikasi' => 'required',
            'tempat' => 'required',
            'waktu' => 'required|date',
            'terlapor' => 'required',
            'kronologi' => 'required',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Cek apakah user dengan email ini sudah mengirim aduan dalam 1 jam terakhir
    $recentReport = Pengaduan::where('email', $request->email)
    ->where('created_at', '>=', now()->subHour())
    ->first();

if ($recentReport) {
    return redirect()->back()->with('error', 'Anda sudah mengirim pengaduan baru-baru ini. Harap tunggu sebelum mengirim lagi.');
}

    
        $pengaduan = new Pengaduan();
        $pengaduan->nama = $request->nama;
        $pengaduan->nomortelepon = $request->nomortelepon;
        $pengaduan->email = $request->email;
        $pengaduan->jenispelanggaran = $request->jenispelanggaran;
        $pengaduan->indikasi = $request->indikasi;
        $pengaduan->tempat = $request->tempat;
        $pengaduan->waktu = $request->waktu;
        $pengaduan->terlapor = $request->terlapor;
        $pengaduan->kronologi = $request->kronologi;
    
        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('bukti', 'public');
            $pengaduan->attachment = $filePath;
        }
    
        $pengaduan->save();
    
        return view('pengaduan.success');
    }
    

    public function show()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.list', compact('pengaduan'));
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.show')->with('success', 'Data pengaduan berhasil dihapus!');
    }
}

