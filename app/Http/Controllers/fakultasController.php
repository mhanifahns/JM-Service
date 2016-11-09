<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fakultas;
use Response;
use Input;

class fakultasController extends Controller
{
  public function index(Request $request) {
      $limit = $request->input('limit', 20);
      $fakultas = fakultas::orderBy('id')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
      $fakultas->appends(array(
          'limit' => $limit
      ));
      return Response()->json($this->transformCollection($fakultas), 200);
  }
  private function transformCollection($fakultas) {
      $fakultasArray = $fakultas->toArray();

      return [
          'data_fakultas' => array_map([$this, 'transform'], $fakultasArray['data']),
      ];
  }

  private function transform($fakultas) {
      return [
          'id'=>$fakultas['id'],
          'NamaFakultas' => $fakultas['NamaFakultas'],
          'Keterangan' => $fakultas['Keterangan'],
      ];
  }

}
