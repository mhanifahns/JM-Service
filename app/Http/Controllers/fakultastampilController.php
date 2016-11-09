<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fakultas;
use Response;
use Input;

class fakultastampilController extends Controller
{

    public function index(Request $request) {
        $limit = $request->input('limit', 20);
        $fakultas = fakultas::orderBy('id')->where('id','1')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas->appends(array(
            'limit' => $limit
        ));
        $fakultas2 = fakultas::orderBy('id')->where('id','2')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas2->appends(array(
            'limit' => $limit
        ));
        $fakultas3 = fakultas::orderBy('id')->where('id','3')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas3->appends(array(
            'limit' => $limit
        ));
        $fakultas4 = fakultas::orderBy('id')->where('id','4')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas4->appends(array(
            'limit' => $limit
        ));
        $fakultas5 = fakultas::orderBy('id')->where('id','5')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas5->appends(array(
            'limit' => $limit
        ));
        $fakultas6 = fakultas::orderBy('id')->where('id','6')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas6->appends(array(
            'limit' => $limit
        ));
        $fakultas7 = fakultas::orderBy('id')->where('id','7')->select('id','NamaFakultas', 'Keterangan')->paginate($limit);
        $fakultas7->appends(array(
            'limit' => $limit
        ));
        return Response()->json($this->transformCollection($fakultas,$fakultas2,$fakultas3,$fakultas4,$fakultas5,$fakultas6,$fakultas7), 200);
    }
    private function transformCollection($fakultas,$fakultas2,$fakultas3,$fakultas4,$fakultas5,$fakultas6,$fakultas7) {
        $fakultasArray = $fakultas->toArray();
        $fakultasArray2 = $fakultas2->toArray();
        $fakultasArray3 = $fakultas3->toArray();
        $fakultasArray4 = $fakultas4->toArray();
        $fakultasArray5 = $fakultas5->toArray();
        $fakultasArray6 = $fakultas6->toArray();
        $fakultasArray7 = $fakultas7->toArray();

        return [
            'data_bahasa' => array_map([$this, 'transform'], $fakultasArray['data']),
            'data_MIPA' => array_map([$this, 'transform'], $fakultasArray2['data']),
            'data_Teknik' => array_map([$this, 'transform'], $fakultasArray3['data']),
            'data_Sosial' => array_map([$this, 'transform'], $fakultasArray4['data']),
            'data_Ekonomi' => array_map([$this, 'transform'], $fakultasArray5['data']),
            'data_Pendidikan' => array_map([$this, 'transform'], $fakultasArray6['data']),
            'data_Olahraga' => array_map([$this, 'transform'], $fakultasArray7['data']),
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
