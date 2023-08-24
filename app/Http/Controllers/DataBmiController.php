<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBmi;
use App\Models\KategoriPerhitungan;

class DataBmiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nomorhp' => 'required|unique:data_bmis',
            'nama' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|integer',
        ], [
            'nomorhp.unique' => 'Nomor HP Anda Sudah Terdaftar'
        ]);

        $data = new DataBmi();
        $data->nomorhp = $request->nomorhp;
        $data->nama = $request->nama;
        $data->tinggi_badan = $request->tinggi_badan;
        $data->berat_badan = $request->berat_badan;
        $data->save();

        return redirect()->route('index')->with('success', 'Data berhasil disimpan');    }

    public function index()
    {
        $dataList = DataBmi::all();
        return view('index',compact('dataList'));
    }

    public function create(){
        return view('create');
    }


    public function edit($id){
        $data = DataBmi::findOrFail($id);
        return view('edit',compact('data'));
    }

    public function show($id)
    {
        $data = DataBmi::findOrFail($id);
        $kategori = $this->hitungKategori($data->berat_badan);

        return view('show', ['data' => $data, 'kategori' => $kategori]);
    }

    private function hitungKategori($beratBadan)
    {
        $kategori = KategoriPerhitungan::where(function ($query) use ($beratBadan) {
            $query->where('batas_bawah', '<=', $beratBadan)
                ->orWhereNull('batas_bawah');
        })
        ->where(function ($query) use ($beratBadan) {
            $query->where('batas_atas', '>', $beratBadan)
                ->orWhereNull('batas_atas');
        })
        ->first();

        return $kategori->nama ?? 'Tidak Diketahui';
    }
    
    public function update(Request $request, $id)
    {
        $data = DataBmi::findOrFail($id);

        $request->validate([
            'nomorhp' => 'required|unique:data_bmis,nomorhp,' . $data->id,
            'nama' => 'required',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|integer',
        ], [
            'nomorhp.unique' => 'Nomor HP Anda Sudah Terdaftar'
        ]);

        $data->nomorhp = $request->nomorhp;
        $data->nama = $request->nama;
        $data->tinggi_badan = $request->tinggi_badan;
        $data->berat_badan = $request->berat_badan;
        $data->save();

        return redirect()->route('index')->with('success', 'Data berhasil diperbarui');
    }



}
