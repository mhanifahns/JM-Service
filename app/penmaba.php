<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penmaba extends Model
{
  protected $connection = 'mysql';
  protected $table="hasil_penmaba";
  protected $fillable=['id','ProgramStudi','kode_peserta','TanggalLahir','hasil'];
  public $timestamps=false;
}
