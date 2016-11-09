<?php

use Illuminate\Database\Seeder;
use App\negara;

class negaraTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            negara::create([
                'nama_negara' => 'Indonesia',
            ]);
            negara::create([
                'nama_negara' => 'Afghanistan',
            ]);
            negara::create([
                'nama_negara' => 'Albania',
            ]);
            negara::create([
                'nama_negara' => 'Algeria',
            ]);
            negara::create([
                'nama_negara' => 'American Samoa',
            ]);
            negara::create([
                'nama_negara' => 'Andorra',
            ]);
            negara::create([
                'nama_negara' => 'Angola',
            ]);
            negara::create([
                'nama_negara' => 'Anguilla',
            ]);
            negara::create([
                'nama_negara' => 'Antarctica',
            ]);
            negara::create([
                'nama_negara' => 'Antigua and Barbuda',
            ]);
            negara::create([
                'nama_negara' => 'Argentina',
            ]);
            negara::create([
                'nama_negara' => 'Armenia',
            ]);
            negara::create([
                'nama_negara' => 'Aruba',
            ]);
            negara::create([
                'nama_negara' => 'Australia',
            ]);
            negara::create([
                'nama_negara' => 'Austria',
            ]);
            negara::create([
                'nama_negara' => 'Azerbaijan',
            ]);
            negara::create([
                'nama_negara' => 'Bahamas',
            ]);
            negara::create([
                'nama_negara' => 'Bahrain',
            ]);
            negara::create([
                'nama_negara' => 'Bangladesh',
            ]);
            negara::create([
                'nama_negara' => 'Barbados',
            ]);
            negara::create([
                'nama_negara' => 'Belarus',
            ]);
            negara::create([
                'nama_negara' => 'Belgium',
            ]);
            negara::create([
                'nama_negara' => 'Belize',
            ]);
            negara::create([
                'nama_negara' => 'Benin',
            ]);
            negara::create([
                'nama_negara' => 'Bermuda',
            ]);
            negara::create([
                'nama_negara' => 'Bhutan',
            ]);
            negara::create([
                'nama_negara' => 'Bolivia',
            ]);
            negara::create([
                'nama_negara' => 'Bosnia and Herzegovina',
            ]);
            negara::create([
                'nama_negara' => 'Botswana',
            ]);
            negara::create([
                'nama_negara' => 'Bouvet Island',
            ]);
            negara::create([
                'nama_negara' => 'Brazil',
            ]);
            negara::create([
                'nama_negara' => 'British Indian Ocean Territory',
            ]);
            negara::create([
                'nama_negara' => 'Brunei Darussalam',
            ]);
            negara::create([
                'nama_negara' => 'Bulgaria',
            ]);
            
            
            
        }
    }

}
