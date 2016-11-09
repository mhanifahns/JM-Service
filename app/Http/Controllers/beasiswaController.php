<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\beasiswa;
use Response;
use Input;

class beasiswaController extends Controller {


public function show($id){
  $beasiswa = beasiswa::find($id);
  return Response::json([
      'data_beasiswa'=>$this->transform($beasiswa)
  ],200);
}
  public function index(Request $request) {
      $limit = $request->input('limit', 76);

      $beasiswa = beasiswa::orderBy('id')->select('nama_beasiswa', 'besaran_nominal', 'sumber_dana','id','keterangan','tanggal_akhir_efektif','tanggal_mulai_efektif')->paginate($limit);
      $beasiswa->appends(array(
          'limit' => $limit
      ));



      return Response()->json($this->transformCollection($beasiswa), 200);
  }

  private function transformCollection($beasiswa) {
      $beasiswaArray = $beasiswa->toArray();

      return [
    'total' => $beasiswaArray['total'],
    'per_page' => intval($beasiswaArray['per_page']),
    'current_page' => $beasiswaArray['current_page'],
    'last_page' => $beasiswaArray['last_page'],
    'next_page_url' => $beasiswaArray['next_page_url'],
    'prev_page_url' => $beasiswaArray['prev_page_url'],
    'from' => $beasiswaArray['from'],
    'to' =>$beasiswaArray['to'],
    'data' => array_map([$this, 'transform'], $beasiswaArray['data'])
  ];
  }

  private function transform($beasiswa) {
      return [
          'nama_beasiswa' => $beasiswa['nama_beasiswa'],
          'besaran_nominal' => $beasiswa['besaran_nominal'],
          'sumber_dana' => $beasiswa['sumber_dana'],
          'id' => $beasiswa['id'],
          'tanggal_mulai_efektif' => $beasiswa['tanggal_mulai_efektif'],
          'tanggal_akhir_efektif' => $beasiswa['tanggal_akhir_efektif'],
          'keterangan' => $beasiswa['keterangan'],


      ];
  }

}
