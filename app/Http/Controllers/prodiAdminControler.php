<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\prodi;
use Response;
use Input;
use DB;

class prodiAdminControler extends Controller {


    public function store(Request $request) {


        $prodi = new prodi;
        $prodi->nama = $request->nama;
        $prodi->fakultas = $request->fakultas;
        $prodi->kuotaPenmaba = $request->kuotaPenmaba;
        $prodi->kuotaSNMPTN = $request->kuotaSNMPTN;
        $prodi->kuotaSBMPTN = $request->kuotaSBMPTN;
        $prodi->save();

        return Response()->json([
                    'message' => 'prodi Created Succesfully',
        ]);
    }

    public function destroy($id) {
        prodi::destroy($id);
    }

    public function update(Request $request, $id) {

        $prodi = prodi::find($id);
        $prodi->nama = $request->nama;
        $prodi->fakultas = $request->fakultas;
        $prodi->kuotaPenmaba = $request->kuotaPenmaba;
        $prodi->kuotaSNMPTN = $request->kuotaSNMPTN;
        $prodi->kuotaSBMPTN = $request->kuotaSBMPTN;
        $prodi->save();


        return Response()->json([
                    'message' => 'prodi Updated Succesfully'
        ]);
    }

    public function index(Request $request) {
        $limit = $request->input('limit', 1000);
        $prodi = DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->select(
        'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
         'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
        $prodi->appends(array(
            'limit' => $limit
        ));


        return Response()->json($this->transformCollection($prodi), 200);
    }

    private function transformCollection($prodi) {
        $prodiArray = $prodi->toArray();
        return [
      'total' => $prodiArray['total'],
      'per_page' => intval($prodiArray['per_page']),
      'current_page' => $prodiArray['current_page'],
      'last_page' => $prodiArray['last_page'],
      'next_page_url' => $prodiArray['next_page_url'],
      'prev_page_url' => $prodiArray['prev_page_url'],
      'from' => $prodiArray['from'],
      'to' =>$prodiArray['to'],
      'data_prodi' => array_map([$this, 'transform'], $prodiArray['data'])
    ];
    }

    private function transform($prodi) {
        return [
            'id' => $prodi->id,
            'nama_prodi' => $prodi->nama,
            'fakultas' => $prodi->NamaFakultas,
            'kuotaSNMPTN' => $prodi->kuotaSNMPTN,
            'kuotaPenmaba' => $prodi->kuotaPenmaba,
            'kuotaSBMPTN' => $prodi->kuotaSBMPTN,
        ];
    }

}
