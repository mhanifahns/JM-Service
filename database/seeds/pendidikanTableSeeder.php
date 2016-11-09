<?php

use Illuminate\Database\Seeder;
use App\pendidikan;
class pendidikanTableSeeder extends Seeder
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
          pendidikan::create([
          'tingkat_pendidikan' => 'SMA'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'SMK'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'D1'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'D2'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'D3'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'D4'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'S1'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'S2'
        ]);
        pendidikan::create([
          'tingkat_pendidikan' => 'S3'
        ]);
      }
    }
}
