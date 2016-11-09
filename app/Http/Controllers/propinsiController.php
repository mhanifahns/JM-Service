<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\propinsi;
use Response;
use Input;

class propinsiController extends Controller {

    public function index(Request $request) {
        $limit = $request->input('limit', 76);

        $propinsi = propinsi::orderBy('kode_propinsi')->select('nama_propinsi','kode_propinsi')->paginate($limit);
        $propinsi->appends(array(
            'limit' => $limit
        ));

        return Response()->json($this->transformCollection($propinsi), 200);
    }

    private function transformCollection($propinsi) {
        $propinsiArray = $propinsi->toArray();
        return [
            'data_propinsi' => array_map([$this, 'transform'], $propinsiArray['data'])
        ];
    }

    private function transform($propinsi) {
        return [
            'nama_propinsi' => $propinsi['nama_propinsi'],
            'kode_propinsi' => $propinsi['kode_propinsi'],
        ];
    }

}
