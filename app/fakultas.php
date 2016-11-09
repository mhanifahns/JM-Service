<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $connection = 'mysql';
    protected $table = "fakultas";
    protected $fillable = ['id', 'NamaFakultas','Keterangan'];
    public $timestamps = false;
}
