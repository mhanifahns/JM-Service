<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sbmptn extends Model
{
  protected $connection = 'mysql';
  protected $table="hasil_sbmptn";
  protected $fillable=['kode_peserta','TanggalLahir','hasil','ProgramStudi','fakultas'];
  public $timestamps=false;
}
