<?php

namespace App\Http\Controllers;

use App\Models\Benefits;
use App\Models\Kriterias;
use App\Models\Categories;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function showKategoriPage()
    {   
        $kategori = Categories::all();
        return view('admin.layout.kategori', compact('kategori'));
    }
    
    public function showKegiatanPage()
    {
        return view('admin.layout.kegiatan');
    }   

    public function showAddKategoriPage()
    {
        return view('admin.layout.add-kategori');
    }

    public function showAddKegiatanPage()
    {
        $kategori = Categories::all();
        $benefit = Benefits::all();
        $kriteria = Kriterias::all();
        return view('admin.layout.add-kegiatan', compact('kategori','benefit', 'kriteria'));
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

    public function addBenefitAction(Request $request)
    {
        $benefit = new Benefits;
        $benefit->benefit = $request->benefit;
        $benefit->save();

        return redirect('/admin/add-kegiatan');
    }

    public function addKriteriaAction(Request $request)
    {
        $kriteria = new Kriterias;
        $kriteria->kriteria = $request->kriteria;
        $kriteria->save();

        return redirect('/admin/add-kegiatan');
    }

    public function addKegiatanAction(Request $request){
        $kegiatan = new Kegiatan;
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect('/admin/kategori');
    }
}
