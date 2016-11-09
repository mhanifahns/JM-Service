<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model {
    protected $connection = 'mysql';
    protected $table = "tr_kabupaten";
    protected $fillable = ['kode_kabupaten', 'nama_kabupaten','kode_propinsi'];
    public $timestamps = false;
}
