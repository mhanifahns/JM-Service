<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\calonmahasiswa;
use Response;
use Input;

class calonmahasiswaController extends Controller {
  public function show($id){
    $calonmahasiswa = calonmahasiswa::find($id);
    return Response()->json([
      'data' => $calonmahasiswa
    ], 200);
  }
  public function store(Request $request){
        $calonmahasiswa=new calonmahasiswa;
        $calonmahasiswa->nama = $request->nama;
        $calonmahasiswa->save();
        return Response()->json([
                'message' => 'Pendaftaran Created Succesfully',
        ]);
    }

  public function update(Request $request, $id) {

        $calonmahasiswa = calonmahasiswa::find($id);
        $calonmahasiswa->nama = $request->nama;
        $calonmahasiswa->tempatlahir = $request->tempatlahir;
        $calonmahasiswa->tanggallahir = $request->tanggallahir;
        $calonmahasiswa->jenisKelamin = $request->jenisKelamin;
        $calonmahasiswa->agama = $request->agama;
        $calonmahasiswa->jenisIdentitas = $request->jenisIdentitas;
        $calonmahasiswa->noIdentitas = $request->noIdentitas;
        $calonmahasiswa->Alamat = $request->Alamat;
        $calonmahasiswa->kabupaten = $request->kabupaten;
        $calonmahasiswa->propinsi = $request->propinsi;
        $calonmahasiswa->Ayah = $request->Ayah;
        $calonmahasiswa->Ibu = $request->Ibu;
        $calonmahasiswa->kerjaAyah = $request->kerjaAyah;
        $calonmahasiswa->kerjaIbu = $request->kerjaIbu;
        $calonmahasiswa->hasilAyah = $request->hasilAyah;
        $calonmahasiswa->hasilIbu = $request->hasilIbu;
        $calonmahasiswa->Tanggungan = $request->Tanggungan;
        $calonmahasiswa->kabupatenAsalPendidikan = $request->kabupatenAsalPendidikan;
        $calonmahasiswa->propinsiAsalPendidikan = $request->propinsiAsalPendidikan;
        $calonmahasiswa->alamatAsalPendidikan = $request->alamatAsalPendidikan;
        $calonmahasiswa->jenisAsalSekolah = $request->jenisAsalSekolah;
        $calonmahasiswa->Npsn = $request->Npsn;
        $calonmahasiswa->Nama_sekolah = $request->Nama_sekolah;
        $calonmahasiswa->jurusanSekolah = $request->jurusanSekolah;
        $calonmahasiswa->save();

        return Response()->json([
                    'message' => 'Beasiswa Updated Succesfully'
        ]);
    }

}
