<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\berita;
use Response;
use Input;

class beritaController extends Controller {
  public function index(Request $request) {
        $limit = $request->input('limit', 2220);
        $berita = berita::orderBy('id')->select('id','ditulis','judul', 'isi_berita','updated_at','kategori')->paginate($limit);
        $berita->appends(array(
            'limit' => $limit
        ));
        return Response()->json($this->transformCollection($berita), 200);
    }
    public function show($id){
      $berita = berita::find($id);
      return Response::json([
          'data_berita'=>$this->transform($berita)
      ],200);
    }

    private function transformCollection($berita) {
        $beritaArray = $berita->toArray();

        return [
      'total' => $beritaArray['total'],
      'per_page' => intval($beritaArray['per_page']),
      'current_page' => $beritaArray['current_page'],
      'last_page' => $beritaArray['last_page'],
      'next_page_url' => $beritaArray['next_page_url'],
      'prev_page_url' => $beritaArray['prev_page_url'],
      'from' => $beritaArray['from'],
      'to' =>$beritaArray['to'],
      'data' => array_map([$this, 'transform'], $beritaArray['data'])
    ];
    }

    private function transform($berita) {
        return [
            'id'=>$berita['id'],
            'judul' => $berita['judul'],
            'isi_berita' => $berita['isi_berita'],
            'updated_at' => $berita['updated_at'],
            'kategori' => $berita['kategori'],
            'ditulis' => $berita['ditulis'],
        ];
    }



}
