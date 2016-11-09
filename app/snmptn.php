<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class snmptn extends Model
{
  protected $connection = 'mysql';
  protected $table="hasil_snmptn";
  protected $fillable=['kode_peserta','TanggalLahir','hasil','ProgramStudi','fakultas'];
  public $timestamps=false;
}
