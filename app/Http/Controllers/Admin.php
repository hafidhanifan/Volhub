<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class Admin extends Controller
{
    public function showKategoriPage()
    {   
        $kategori = Categories::all();
        return view('admin.layout.kategori', compact('kategori'));
    }

    public function showAddKategoriPage()
    {
        return view('admin.layout.add-kategori');
    }

    public function showEditKategoriPage($id)
    {
        $kategori = Categories::find($id);
        return view('admin.layout.edit-kategori', compact('kategori'));
    }
    
    public function addKategoriAction(Request $request)
    {
        $kategori = new Categories;
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect('/admin/kategori');
    }

    public function editKategoriAction(Request $request, $id)
    {
        $kategori = Categories::find($id);
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect()->route('admin.kategori', ['id' => $id])->with('success', 'Kategori berhasil diupdate.');
    }

    public function deleteKategoriAction($id)
    {
        $kategori = Categories::find($id);

        if ($kategori) {
            $kategori->delete();
            return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus.');
        } else {
            return redirect()->route('admin.kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    }
}
