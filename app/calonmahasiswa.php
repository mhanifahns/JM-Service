<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calonmahasiswa extends Model
{
    protected $connection = 'mysql';
    protected $table = "calon_mahasiswa";
    protected $fillable = ['nama', 'tempatlahir','tanggallahir',
        'jenisKelamin','agama','negara',
        'jenisIdentitas','noIdentitas','Alamat',
        'Kelurahan','Kecamatan','kabupaten',
        'propinsi','kodePos','Ayah',
        'Ibu','kerjaAyah','kerjaIbu',
        'hasilAyah','hasilIbu','Tanggungan',
        'kabupatenAsalPendidikan','propinsiAsalPendidikan','alamatAsalPendidikan',
        'jenisAsalSekolah','Npsn','Nama_sekolah','jurusanSekolah',
        'fileFoto'];
    public $timestamps = false;
    public $incrementing = false;
}
