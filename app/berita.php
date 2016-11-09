<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $connection = 'mysql';
    protected $table="berita";
    protected $fillable=['id','judul','isi_berita','tanggal'];
}
