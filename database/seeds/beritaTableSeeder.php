<?php

use Illuminate\Database\Seeder;
use App\berita;

class beritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
      foreach(range(1,5) as $index){
          berita::create([
          'judul' => 'Peserta SBMPTN harap mengisi biodata',
          'isi_berita'=>'Peserta SBMPTN',
          'tanggal'=>'1994-12-02'
        ]);
          berita::create([
          'judul' => 'test1',
          'isi_berita'=>'Peserta SBMPTN',
          'tanggal'=>'1994-12-02'
        ]);
          berita::create([
          'judul' => 'test2',
          'isi_berita'=>'Peserta SBMPTN',
          'tanggal'=>'1994-12-02'
        ]);
          berita::create([
          'judul' => 'test3',
          'isi_berita'=>'Peserta SBMPTN',
          'tanggal'=>'1994-12-02'
        ]);
    }
}
}
