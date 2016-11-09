<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Peserta;

use Response;

class pesertaController extends Controller
{
  public function __construct(){
      $this->middleware('jwt.auth', ['except' => ['authenticate', 'store']]);
  }

  public function store(Request $request){
    if(!$request->username){
          return Response()->json([
              'error' => [
                  'message' => 'Data yang dimasukan tidak lengkap!'
              ]
          ], 422);
      }

      $pendaftar = Peserta::create($request->all());

      return Response()->json([
              'message' => 'Input data sukses!',
      ]);
  }

  public function update(Request $request, $id){
    if(! $request->kelompok or ! $request->nomor_tagihan){
        return Response()->json([
            'error' => [
                'message' => 'Data yang dimasukan tidak lengkap!'
            ]
        ], 422);
    }

    $pendaftar = Peserta::find($id);
    $pendaftar->kelompok = $request->kelompok;
    $pendaftar->nomor_tagihan = $request->nomor_tagihan;
    $pendaftar->save();

    return Response()->json([
            'message' => 'Input data sukses!',
    ]);
  }

  public function show($id){
    $pendaftar = Peserta::find($id);
    return Response()->json([
      'data' => $pendaftar
    ], 200);
  }
}
