<?php

use Illuminate\Database\Seeder;
use App\admin;

class adminTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            admin::create([
                'Username' => 'test',
                'Email' => 'hanif@gmail.com',
                'password' => bcrypt('123'),
                'Nama' => 'Hanif',
                'Telepon' => '21321312',
                'Status' => '1',
                'Level_user' => '2',
            ]);
        }
    }

}
