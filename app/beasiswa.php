<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beasiswa extends Model
{
    protected $connection = 'mysql';
    protected $table="beasiswa";
    protected $fillable=['nama_beasiswa','sumber_dana','besaran_nominal','tanggal_akhir_efektif','Tanggal_mulai_efektif','keterangan'];
    public $timestamps=false;
}
