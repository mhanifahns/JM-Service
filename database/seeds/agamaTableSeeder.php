<?php

use Illuminate\Database\Seeder;
use App\agama;
class agamaTableSeeder extends Seeder
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
          agama::create([
          'nama_agama' => 'Islam'
        ]);
        agama::create([
          'nama_agama' => 'Katolik'
        ]);
         agama::create([
          'nama_agama' => 'Protestan'
        ]);
          agama::create([
          'nama_agama' => 'Budha'
        ]);
         agama::create([
          'nama_agama' => 'Hindu'
        ]);
          agama::create([
          'nama_agama' => 'Konghuchu'
        ]);
           agama::create([
          'nama_agama' => 'lainnya'
        ]);
      }
    }
}