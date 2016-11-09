<?php

use Illuminate\Database\Seeder;
use App\Fakultas;
class fakultasTableSeeder extends Seeder
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
          fakultas::create([
          'singkatan' => 'FBS',
          'namaFakultas'=>'Bahasa dan Seni',
          'Deskripsi'=>'',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FIS',
          'namaFakultas'=>'Ilmu Sosial',
          'Deskripsi'=>'',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FMIPA',
          'namaFakultas'=>'Matematika dan IPA',
          'Deskripsi'=>'',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FE',
          'namaFakultas'=>'Ekonomi',
          'Deskripsi'=>'3',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FIP',
          'namaFakultas'=>'Pendidikan',
          'Deskripsi'=>'3',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FK',
          'namaFakultas'=>'Keolahragaan',
          'Deskripsi'=>'3',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'PascaSarjana',
          'namaFakultas'=>'Pasca Sarjana',
          'Deskripsi'=>'3',
          'Akreditas'=>'A'
        ]);
          fakultas::create([
          'singkatan' => 'FBS',
          'namaFakultas'=>'Fakultas Bahasa dan Seni',
          'Deskripsi'=>'3',
          'Akreditas'=>'A'
        ]);
      }
    }
}
