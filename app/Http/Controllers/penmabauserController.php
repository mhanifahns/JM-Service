<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\penmabaUser;

use Response;

use DB;

use Hash;

class penmabauserController extends Controller
{
  public function __construct(){
      $this->middleware('jwt.auth', ['except' => ['authenticate', 'store']]);
  }

  public function store(Request $request){
    if(!$request->username or !$request->password or !$request->nama or !$request->email or !$request->telepon){
          return Response()->json([
              'error' => [
                  'message' => 'Data yang dimasukan tidak lengkap!'
              ]
          ], 422);
      }

      $pendaftaran = new penmabaUser;
      $pendaftaran->username = $request->username;
      $pendaftaran->password = bcrypt($request->password);
      $pendaftaran->nama = $request->nama;
      $pendaftaran->email = $request->email;
      $pendaftaran->telepon = $request->telepon;
      $pendaftaran->keterangan = $request->keterangan;
      $pendaftaran->save();

      return Response()->json([
              'message' => 'Account berhasil dibuat!',
      ]);
  }

  public function update(Request $request, $id)
    {
        if(!$request->tahapan){
            return Response()->json([
                'error' => [
                    'message' => 'Data yang dimasukan tidak lengkap!'
                ]
            ], 422);
        }

        $user = penmabaUser::find($id);
        $user->tahapan = $request->tahapan;
        $user->save();

        return Response()->json([
                'message' => 'Tahapan berhasil diperbarui!'
        ]);
    }
}
