<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penmabaUser extends Model
{
  protected $connection = 'mysql2';
  protected $table = "users";

    public $timestamps = false;

    protected $fillable = [
        'username', 'password', 'nama', 'email', 'telepon', 'status', 'tahapan', 'keterangan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
