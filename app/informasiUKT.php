<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasiUKT extends Model {
    protected $connection = 'mysql';
  protected $table = "informasi_ukt";
    protected $fillable = ['id', 'ProgramStudi','level_ukt','nominalukt'];
    public $timestamps = false;
}
