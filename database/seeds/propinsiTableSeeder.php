<?php

use Illuminate\Database\Seeder;
use App\propinsi;
class propinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            propinsi::create([
                'nama_propinsi' => 'DKI JAKARTA',
            ]);
            propinsi::create([
                'nama_propinsi' => 'BANTEN',
            ]);
            propinsi::create([
                'nama_propinsi' => 'JAWA BARAT',
            ]);
            propinsi::create([
                'nama_propinsi' => 'SUMATERA UTARA',
            ]);
            propinsi::create([
                'nama_propinsi' => 'NANGGROE ACEH DARUSSALAM (NAD)',
            ]);
            propinsi::create([
                'nama_propinsi' => 'SUMATERA BARAT',
            ]);
            propinsi::create([
                'nama_propinsi' => 'RIAU',
            ]);
            propinsi::create([
                'nama_propinsi' => 'KEPULAUAN RIAU  ',
            ]);
            propinsi::create([
                'nama_propinsi' => 'SUMATERA SELATAN',
            ]);
            propinsi::create([
                'nama_propinsi' => 'BANGKA BELITUNG',
            ]);
            propinsi::create([
                'nama_propinsi' => 'LAMPUNG',
            ]);
            propinsi::create([
                'nama_propinsi' => 'JAMBI',
            ]);
            propinsi::create([
                'nama_propinsi' => 'BENGKULU',
            ]);
            propinsi::create([
                'nama_propinsi' => 'JAWA TENGAH',
            ]);
            propinsi::create([
                'nama_propinsi' => 'DI YOGYAKARTA',
            ]);
            propinsi::create([
                'nama_propinsi' => 'KALIMANTAN SELATAN',
            ]);
             propinsi::create([
                'nama_propinsi' => 'KALIMANTAN TENGAH',
            ]);
              propinsi::create([
                'nama_propinsi' => 'KALIMANTAN TIMUR',
            ]);
               propinsi::create([
                'nama_propinsi' => 'KALIMANTAN UTARA',
            ]); 
               propinsi::create([
                'nama_propinsi' => 'KALIMANTAN BARAT',
            ]);
             propinsi::create([
                'nama_propinsi' => 'BALI',
            ]);
              propinsi::create([
                'nama_propinsi' => 'NUSA TENGGARA BARAT (NTB)',
            ]);
               propinsi::create([
                'nama_propinsi' => 'NUSA TENGGARA TIMUR (NTT)',
            ]);
                 propinsi::create([
                'nama_propinsi' => 'SULAWESI SELATAN',
            ]);
               
            
        }
    }
}
