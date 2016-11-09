<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\kabupaten;
use Response;
use Input;

class kabupatenController extends Controller
{
       public function index(Request $request) {
        $limit = $request->input('limit', 76);
        $kabupaten1 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi', '1')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten1->appends(array(
            'limit' => $limit
        ));
        $kabupaten10 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','10')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten10->appends(array(
            'limit' => $limit
        ));
        $kabupaten11 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','11')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten11->appends(array(
            'limit' => $limit
        ));
        $kabupaten12 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','12')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten12->appends(array(
            'limit' => $limit
        ));
        $kabupaten13 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','13')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten13->appends(array(
            'limit' => $limit
        ));
        $kabupaten14 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','14')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten14->appends(array(
            'limit' => $limit
        ));
        $kabupaten15 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','15')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten15->appends(array(
            'limit' => $limit
        ));
        $kabupaten16 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','16')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten16->appends(array(
            'limit' => $limit
        ));
        $kabupaten17 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','17')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten17->appends(array(
            'limit' => $limit
        ));
        $kabupaten18 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','18')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten18->appends(array(
            'limit' => $limit
        ));
        $kabupaten19 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','19')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten19->appends(array(
            'limit' => $limit
        ));

        $kabupaten2 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','2')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten2->appends(array(
            'limit' => $limit
        ));
        $kabupaten20 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','20')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten20->appends(array(
            'limit' => $limit
        ));
        $kabupaten21 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','21')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten21->appends(array(
            'limit' => $limit
        ));
        $kabupaten22 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','22')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten22->appends(array(
            'limit' => $limit
        ));
        $kabupaten23 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','23')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten23->appends(array(
            'limit' => $limit
        ));
        $kabupaten29 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','24')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten29->appends(array(
            'limit' => $limit
        ));
        $kabupaten24 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','25')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten24->appends(array(
            'limit' => $limit
        ));
        $kabupaten25 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','26')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten25->appends(array(
            'limit' => $limit
        ));
        $kabupaten26 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','27')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten26->appends(array(
            'limit' => $limit
        ));
        $kabupaten27 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','28')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten27->appends(array(
            'limit' => $limit
        ));
        $kabupaten28 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','29')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten28->appends(array(
            'limit' => $limit
        ));


        $kabupaten3 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','3')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten3->appends(array(
            'limit' => $limit
        ));
        $kabupaten30 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','30')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten30->appends(array(
            'limit' => $limit
        ));
        $kabupaten31 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','31')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten31->appends(array(
            'limit' => $limit
        ));
        $kabupaten32 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','32')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten32->appends(array(
            'limit' => $limit
        ));
        $kabupaten33 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','33')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten33->appends(array(
            'limit' => $limit
        ));
        $kabupaten34 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','34')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten34->appends(array(
            'limit' => $limit
        ));

        $kabupaten4 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','4')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten4->appends(array(
            'limit' => $limit
        ));
        $kabupaten5 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','5')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten5->appends(array(
            'limit' => $limit
        ));
        $kabupaten6 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','6')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten6->appends(array(
            'limit' => $limit
        ));
        $kabupaten7 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','7')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten7->appends(array(
            'limit' => $limit
        ));
        $kabupaten8 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','8')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten8->appends(array(
            'limit' => $limit
        ));
        $kabupaten9 = kabupaten::orderBy('kode_kabupaten')->where('kode_propinsi','9')->select('nama_kabupaten','kode_kabupaten')->paginate($limit);
        $kabupaten9->appends(array(
            'limit' => $limit
        ));

        return Response()->json($this->transformCollection(
        $kabupaten1,$kabupaten10,$kabupaten11,$kabupaten12,$kabupaten13,$kabupaten14,$kabupaten15,$kabupaten16,$kabupaten17,$kabupaten18,$kabupaten19,
        $kabupaten2,$kabupaten20,$kabupaten21,$kabupaten22,$kabupaten23,$kabupaten24,$kabupaten25,$kabupaten26,$kabupaten27,$kabupaten28,$kabupaten29,
        $kabupaten3,$kabupaten30,$kabupaten31,$kabupaten32,$kabupaten33,$kabupaten34,
        $kabupaten4,$kabupaten5,$kabupaten6,$kabupaten7,$kabupaten8,$kabupaten9), 200);
    }

    private function transformCollection(
      $kabupaten1,$kabupaten10,$kabupaten11,$kabupaten12,$kabupaten13,$kabupaten14,$kabupaten15,$kabupaten16,$kabupaten17,$kabupaten18,$kabupaten19,
      $kabupaten2,$kabupaten20,$kabupaten21,$kabupaten22,$kabupaten23,$kabupaten24,$kabupaten25,$kabupaten26,$kabupaten27,$kabupaten28,$kabupaten29,
      $kabupaten3,$kabupaten30,$kabupaten31,$kabupaten32,$kabupaten33,$kabupaten34,
      $kabupaten4,$kabupaten5,$kabupaten6,$kabupaten7,$kabupaten8,$kabupaten9) {

        $kabupaten1Array = $kabupaten1->toArray();
        $kabupaten10Array = $kabupaten10->toArray();
        $kabupaten11Array = $kabupaten11->toArray();
        $kabupaten12Array = $kabupaten12->toArray();
        $kabupaten13Array = $kabupaten13->toArray();
        $kabupaten14Array = $kabupaten14->toArray();
        $kabupaten15Array = $kabupaten15->toArray();
        $kabupaten16Array = $kabupaten16->toArray();
        $kabupaten17Array = $kabupaten17->toArray();
        $kabupaten18Array = $kabupaten18->toArray();
        $kabupaten19Array = $kabupaten19->toArray();

        $kabupaten2Array = $kabupaten2->toArray();
        $kabupaten20Array = $kabupaten20->toArray();
        $kabupaten21Array = $kabupaten21->toArray();
        $kabupaten22Array = $kabupaten22->toArray();
        $kabupaten23Array = $kabupaten23->toArray();
        $kabupaten24Array = $kabupaten24->toArray();
        $kabupaten25Array = $kabupaten25->toArray();
        $kabupaten26Array = $kabupaten26->toArray();
        $kabupaten27Array = $kabupaten27->toArray();
        $kabupaten28Array = $kabupaten28->toArray();
        $kabupaten29Array = $kabupaten29->toArray();

        $kabupaten3Array = $kabupaten3->toArray();
        $kabupaten30Array = $kabupaten30->toArray();
        $kabupaten31Array = $kabupaten31->toArray();
        $kabupaten32Array = $kabupaten32->toArray();
        $kabupaten33Array = $kabupaten33->toArray();
        $kabupaten34Array = $kabupaten34->toArray();

        $kabupaten4Array = $kabupaten4->toArray();
        $kabupaten5Array = $kabupaten5->toArray();
        $kabupaten6Array = $kabupaten6->toArray();
        $kabupaten7Array = $kabupaten7->toArray();
        $kabupaten8Array = $kabupaten8->toArray();
        $kabupaten9Array = $kabupaten9->toArray();

        return [
            'data_kabupaten1' => array_map([$this, 'transform'], $kabupaten1Array['data']),
            'data_kabupaten10' => array_map([$this, 'transform'], $kabupaten10Array['data']),
            'data_kabupaten11' => array_map([$this, 'transform'], $kabupaten11Array['data']),
            'data_kabupaten12' => array_map([$this, 'transform'], $kabupaten12Array['data']),
            'data_kabupaten13' => array_map([$this, 'transform'], $kabupaten13Array['data']),
            'data_kabupaten14' => array_map([$this, 'transform'], $kabupaten14Array['data']),
            'data_kabupaten15' => array_map([$this, 'transform'], $kabupaten15Array['data']),
            'data_kabupaten16' => array_map([$this, 'transform'], $kabupaten16Array['data']),
            'data_kabupaten17' => array_map([$this, 'transform'], $kabupaten17Array['data']),
            'data_kabupaten18' => array_map([$this, 'transform'], $kabupaten18Array['data']),
            'data_kabupaten19' => array_map([$this, 'transform'], $kabupaten19Array['data']),

            'data_kabupaten2' => array_map([$this, 'transform'], $kabupaten2Array['data']),
            'data_kabupaten20' => array_map([$this, 'transform'], $kabupaten20Array['data']),
            'data_kabupaten21' => array_map([$this, 'transform'], $kabupaten21Array['data']),
            'data_kabupaten22' => array_map([$this, 'transform'], $kabupaten22Array['data']),
            'data_kabupaten23' => array_map([$this, 'transform'], $kabupaten23Array['data']),
            'data_kabupaten24' => array_map([$this, 'transform'], $kabupaten24Array['data']),
            'data_kabupaten25' => array_map([$this, 'transform'], $kabupaten25Array['data']),
            'data_kabupaten26' => array_map([$this, 'transform'], $kabupaten26Array['data']),
            'data_kabupaten27' => array_map([$this, 'transform'], $kabupaten27Array['data']),
            'data_kabupaten28' => array_map([$this, 'transform'], $kabupaten28Array['data']),
            'data_kabupaten29' => array_map([$this, 'transform'], $kabupaten29Array['data']),

            'data_kabupaten3' => array_map([$this, 'transform'], $kabupaten3Array['data']),
            'data_kabupaten30' => array_map([$this, 'transform'], $kabupaten30Array['data']),
            'data_kabupaten31' => array_map([$this, 'transform'], $kabupaten31Array['data']),
            'data_kabupaten32' => array_map([$this, 'transform'], $kabupaten32Array['data']),
            'data_kabupaten33' => array_map([$this, 'transform'], $kabupaten33Array['data']),
            'data_kabupaten34' => array_map([$this, 'transform'], $kabupaten34Array['data']),
            'data_kabupaten4' => array_map([$this, 'transform'], $kabupaten4Array['data']),
            'data_kabupaten5' => array_map([$this, 'transform'], $kabupaten5Array['data']),
            'data_kabupaten6' => array_map([$this, 'transform'], $kabupaten6Array['data']),
            'data_kabupaten7' => array_map([$this, 'transform'], $kabupaten7Array['data']),
            'data_kabupaten8' => array_map([$this, 'transform'], $kabupaten8Array['data']),
            'data_kabupaten9' => array_map([$this, 'transform'], $kabupaten9Array['data']),


        ];
    }

    private function transform($kabupaten) {
        return [
            'nama_kabupaten' => $kabupaten['nama_kabupaten'],
            'kode_kabupaten' => $kabupaten['kode_kabupaten'],
        ];
    }
}
