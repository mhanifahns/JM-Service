<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\User;
use App\calonmahasiswa;

use Response;

use Hash;

class PendaftaranController extends Controller
{
  public function store(Request $request){

      $pendaftaran = new User;
      $pendaftaran->username = $request->username;
      $pendaftaran->password = bcrypt($request->password);
      $pendaftaran->email = $request->email;
      $pendaftaran->telepon = $request->telepon;
      $pendaftaran->aktif = $request->aktif;
      $pendaftaran->statbio = $request->statbio;
      $pendaftaran->save();

      return Response()->json([
              'message' => 'Pendaftaran Created Succesfully',
      ]);
  }
  public function update(Request $request,$id){
      $pendaftaran = User::find($id);
      $pendaftaran->statbio = $request->statbio;
      $pendaftaran->save();

      return Response()->json([
              'message' => 'Pendaftaran Update Succesfully',
      ]);
  }
}
