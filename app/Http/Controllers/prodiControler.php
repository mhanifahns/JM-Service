<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\prodi;
use Response;
use Input;
use DB;

class prodiControler extends Controller {


    public function index(Request $request) {
        $limit = $request->input('limit', 76);
      $pendidikan =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas',"Fakultas Ilmu Pendidikan")->select(
        'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
         'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
        $pendidikan->appends(array(
            'limit' => $limit
        ));
        $ekonomi =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '5')->select(
          'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
           'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
          $ekonomi->appends(array(
              'limit' => $limit
          ));
          $olahraga =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '7')->select(
            'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
             'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
            $olahraga->appends(array(
                'limit' => $limit
            ));
            $teknik =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '3')->select(
              'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
               'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
              $teknik->appends(array(
                  'limit' => $limit
              ));
              $sosial =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '4')->select(
                'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
                 'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
                $sosial->appends(array(
                    'limit' => $limit
                ));
                $mipa =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '2')->select(
                  'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
                   'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
                  $mipa->appends(array(
                      'limit' => $limit
                  ));
                  $bahasa =DB::table('tb_programstudi')->join('fakultas','fakultas.id','=','tb_programstudi.fakultas')->where('tb_programstudi.fakultas', '1')->select(
                    'tb_programstudi.id','tb_programstudi.nama','fakultas.NamaFakultas',
                     'tb_programstudi.kuotaPenmaba','tb_programstudi.kuotaSNMPTN','tb_programstudi.kuotaSBMPTN')->paginate($limit);
                    $bahasa->appends(array(
                        'limit' => $limit
                    ));



        return Response()->json($this->transformCollection($bahasa, $ekonomi, $mipa, $teknik, $sosial, $olahraga, $pendidikan), 200);
    }

    private function transformCollection($bahasa, $ekonomi, $mipa, $teknik, $sosial, $olahraga, $pendidikan) {
        $bahasaArray = $bahasa->toArray();
        $ekonomiArray = $ekonomi->toArray();
        $mipaArray = $mipa->toArray();
        $teknikArray = $teknik->toArray();
        $sosialArray = $sosial->toArray();
        $olahragaArray = $olahraga->toArray();
        $pendidikanArray = $pendidikan->toArray();
        return [
            'data_bahasa' => array_map([$this, 'transform'], $bahasaArray['data']),
            'data_ekonomi' => array_map([$this, 'transform'], $ekonomiArray['data']),
            'data_mipa' => array_map([$this, 'transform'], $mipaArray['data']),
            'data_teknik' => array_map([$this, 'transform'], $teknikArray['data']),
            'data_sosial' => array_map([$this, 'transform'], $sosialArray['data']),
            'data_olahraga' => array_map([$this, 'transform'], $olahragaArray['data']),
            'data_pendidikan' => array_map([$this, 'transform'], $pendidikanArray['data']),
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
