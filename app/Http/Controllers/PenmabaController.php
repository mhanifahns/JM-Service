<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\penmaba;
use Response;
use Input;
use DB;

class PenmabaController extends Controller
{
  public function index(Request $request) {
    $search_term = $request->input('search');
      $limit = $request->input('limit', 220);
      if ($search_term)
      {
        $penmaba = penmaba::orderBy('kode_peserta')->where('hasil_penmaba.kode_peserta', 'LIKE', "%$search_term%")->select('id','kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
        $penmaba->appends(array(
          'search' => $search_term,
            'limit' => $limit
        ));
      }
      else {
        $penmaba = penmaba::orderBy('kode_peserta')->select('id','kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
        $penmaba->appends(array(
            'limit' => $limit
        ));
      }

      return Response()->json($this->transformCollection($penmaba), 200);
  }

  private function transformCollection($penmaba) {
      $penmabaArray = $penmaba->toArray();

      return [
    'data_penmaba' => array_map([$this, 'transform'], $penmabaArray['data'])
  ];
  }

  private function transform($penmaba) {
      return [
        'id'=>$penmaba['id'],
        'kode_peserta'=>$penmaba['kode_peserta'],
        'ProgramStudi' => $penmaba['ProgramStudi'],
        'fakultas' => $penmaba['fakultas'],
        'hasil' => $penmaba['hasil'],
        'flag' => $penmaba['flag'],
      ];
  }
}
