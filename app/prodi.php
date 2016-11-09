<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $connection = 'mysql';
    protected $table="tb_programstudi";
    protected $fillable=['id','nama','kuotaSNMPTN','kuotaSBMPTN','kuotaPenmaba','fakultas'];
    public $timestamps=false;
}
