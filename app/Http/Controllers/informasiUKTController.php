<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\informasiUKT;
use Response;
use Input;
use DB;

class informasiUKTController extends Controller {


    public function index(Request $request) {
        $limit = $request->input('limit', 76);

        $informasiUKT1= DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '1')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT1->appends(array(
            'limit' => $limit
        ));

        $informasiUKT2 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '2')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT2->appends(array(
            'limit' => $limit
        ));

        $informasiUKT3 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '3')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT3->appends(array(
            'limit' => $limit
        ));

        $informasiUKT4 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '4')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT4->appends(array(
            'limit' => $limit
        ));

        $informasiUKT5 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '5')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT5->appends(array(
            'limit' => $limit
        ));

        $informasiUKT6 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '6')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT6->appends(array(
            'limit' => $limit
        ));

        $informasiUKT7 = DB::table('informasi_ukt')->join('tb_programstudi','tb_programstudi.id','=','informasi_ukt.ProgramStudi')->join('fakultas','fakultas.id','=','informasi_ukt.fakultas')->where('informasi_ukt.fakultas', '7')->select('informasi_ukt.id',
        'tb_programstudi.nama',
        'fakultas.NamaFakultas','level_ukt','level_ukt2','level_ukt3','level_ukt4','level_ukt5','level_ukt6','level_ukt7','level_ukt8')->paginate($limit);
        $informasiUKT7->appends(array(
            'limit' => $limit
        ));


        return Response()->json($this->transformCollection(
        $informasiUKT1, $informasiUKT2, $informasiUKT3, $informasiUKT4, $informasiUKT5, $informasiUKT6, $informasiUKT7), 200);
    }

    private function transformCollection($informasiUKT1, $informasiUKT2, $informasiUKT3, $informasiUKT4, $informasiUKT5, $informasiUKT6, $informasiUKT7) {

        $informasiUKT1Array = $informasiUKT1->toArray();
        $informasiUKT2Array = $informasiUKT2->toArray();
        $informasiUKT3Array = $informasiUKT3->toArray();
        $informasiUKT4Array = $informasiUKT4->toArray();
        $informasiUKT5Array = $informasiUKT5->toArray();
        $informasiUKT6Array = $informasiUKT6->toArray();
        $informasiUKT7Array = $informasiUKT7->toArray();



        return [
            'data_informasiUKT1' => array_map([$this, 'transform'], $informasiUKT1Array['data']),
            'data_informasiUKT2' => array_map([$this, 'transform'], $informasiUKT2Array['data']),
            'data_informasiUKT3' => array_map([$this, 'transform'], $informasiUKT3Array['data']),
            'data_informasiUKT4' => array_map([$this, 'transform'], $informasiUKT4Array['data']),
            'data_informasiUKT5' => array_map([$this, 'transform'], $informasiUKT5Array['data']),
            'data_informasiUKT6' => array_map([$this, 'transform'], $informasiUKT6Array['data']),
            'data_informasiUKT7' => array_map([$this, 'transform'], $informasiUKT7Array['data']),

        ];
    }

    private function transform($informasiUKT) {
        return [
          'id' => $informasiUKT->id,
        'ProgramStudi' => $informasiUKT->nama,
        'fakultas' => $informasiUKT->NamaFakultas,
        'level_ukt' => $informasiUKT->level_ukt,
        'level_ukt2' => $informasiUKT->level_ukt2,
        'level_ukt3' => $informasiUKT->level_ukt3,
        'level_ukt4' => $informasiUKT->level_ukt4,
        'level_ukt5' => $informasiUKT->level_ukt5,
        'level_ukt6' => $informasiUKT->level_ukt6,
        'level_ukt7' => $informasiUKT->level_ukt7,
        'level_ukt8' => $informasiUKT->level_ukt8,
        ];
    }

}
