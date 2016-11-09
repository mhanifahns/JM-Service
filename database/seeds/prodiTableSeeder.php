<?php

use Illuminate\Database\Seeder;
use App\prodi;
class prodiTableSeeder extends Seeder
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
          prodi::create([
          'nama_programstudi' => 'Pendidikan Teknik Informatika',
          'fakultas'=>'1',
          'pendidikan'=>'7',
          'tanggal_berdiri'=>'12/24/25',
          'akreditas'=>'A',
          'kuotaSNMPTN'=>'24',
          'kuotaSBMPTN'=>'24',
          'kuotaSM'=>'24'
        ]);
          prodi::create([
          'nama_programstudi' => 'Bahasa Jepang',
          'fakultas'=>'2',
          'pendidikan'=>'7',
          'tanggal_berdiri'=>'12/24/25',
          'akreditas'=>'A',
          'kuotaSNMPTN'=>'24',
          'kuotaSBMPTN'=>'24',
          'kuotaSM'=>'24'
        ]);
          prodi::create([
          'nama_programstudi' => 'Pendidikan Akuntansi',
          'fakultas'=>'5',
          'pendidikan'=>'7',
          'tanggal_berdiri'=>'12/24/25',
          'akreditas'=>'A',
          'kuotaSNMPTN'=>'24',
          'kuotaSBMPTN'=>'24',
          'kuotaSM'=>'24'
        ]);
      }
    }
}
