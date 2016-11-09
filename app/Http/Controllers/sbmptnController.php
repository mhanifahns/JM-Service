<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\sbmptn;
use Response;
use Input;
use DB;

class sbmptnController extends Controller
{
  public function index(Request $request) {
      $search_term = $request->input('search');
      $limit = $request->input('limit', 220);
      if ($search_term)
      {
        $sbmptn = sbmptn::orderBy('kode_peserta')->where('hasil_sbmptn.kode_peserta', 'LIKE', "%$search_term%")->select('kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
        $sbmptn->appends(array(
          'search' => $search_term,
            'limit' => $limit
        ));
      }
      else {

        $sbmptn = sbmptn::orderBy('kode_peserta')->select('kode_peserta','ProgramStudi', 'fakultas','hasil','flag')->paginate($limit);
        $sbmptn->appends(array(
            'limit' => $limit
        ));
    }
      return Response()->json($this->transformCollection($sbmptn), 200);
  }

  private function transformCollection($sbmptn) {
      $sbmptnArray = $sbmptn->toArray();

      return [
    'total' => $sbmptnArray['total'],
    'per_page' => intval($sbmptnArray['per_page']),
    'current_page' => $sbmptnArray['current_page'],
    'last_page' => $sbmptnArray['last_page'],
    'next_page_url' => $sbmptnArray['next_page_url'],
    'prev_page_url' => $sbmptnArray['prev_page_url'],
    'from' => $sbmptnArray['from'],
    'to' =>$sbmptnArray['to'],
    'data_sbmptn' => array_map([$this, 'transform'], $sbmptnArray['data'])
  ];
  }

  private function transform($sbmptn) {
    return [
      'kode_peserta'=>$sbmptn['kode_peserta'],
      'ProgramStudi' => $sbmptn['ProgramStudi'],
      'fakultas' => $sbmptn['fakultas'],
      'hasil' => $sbmptn['hasil'],
      'flag' => $sbmptn['flag'],
    ];
  }
}
