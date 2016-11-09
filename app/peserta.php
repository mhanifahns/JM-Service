<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
  public $timestamps = false;
  protected $connection = 'mysql2';

protected $table = 'pendaftar';

protected $fillable = [
    'username',
];
}
