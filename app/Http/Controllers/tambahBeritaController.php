<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class tambahBeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); // Mengambil semua data dari tabel beritas
        return view('tambahberita', compact('beritas')); // Mengirim data ke view home
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan file gambar ke public/images
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('image'), $imageName);

        // Simpan data ke database
        $berita = new Berita();
        $berita->title = $request->title;
        $berita->image_path = 'image/' . $imageName;
        $berita->save();

        return redirect()->route('tambahBerita.index')->with('success', 'Berita berhasil ditambahkan!');
    }
}
