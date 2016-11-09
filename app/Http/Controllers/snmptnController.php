<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\snmptn;
use Response;
use Input;

class snmptnController extends Controller
{
  public function index(Request $request) {
    $search_term = $request->input('search');
    $limit = $request->input('limit', 220);
    if ($search_term)
    {
      $snmptn = snmptn::orderBy('kode_peserta')->where('hasil_snmptn.kode_peserta', 'LIKE', "%$search_term%")->select('kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
      $snmptn->appends(array(
        'search' => $search_term,
          'limit' => $limit
      ));
    }
    else {
      $snmptn = snmptn::orderBy('kode_peserta')->select('kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
      $snmptn->appends(array(
          'limit' => $limit
      ));
    }
      return Response()->json($this->transformCollection($snmptn), 200);
  }

  private function transformCollection($snmptn) {
      $snmptnArray = $snmptn->toArray();

      return [
    'data_snmptn' => array_map([$this, 'transform'], $snmptnArray['data']),
      ];
  }

  private function transform($snmptn) {
      return [
        'kode_peserta'=>$snmptn['kode_peserta'],
        'ProgramStudi' => $snmptn['ProgramStudi'],
        'fakultas' => $snmptn['fakultas'],
        'hasil' => $snmptn['hasil'],
        'flag' => $snmptn['flag'],
      ];
  }

}
