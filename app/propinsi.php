<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propinsi extends Model
{
  protected $connection = 'mysql';
  protected $table="tr_propinsi";
  protected $fillable=['kode_propinsi','nama_propinsi'];
  public $timestamps=false;

}
