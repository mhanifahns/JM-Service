<?php

use Illuminate\Database\Seeder;
use App\beasiswa;

class BeasiswaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 5) as $index) {
            beasiswa::create([
                'nama_beasiswa' => 'PPA',
                'sumber_dana' => 'Proyek UNJ',
                'besaran_nominal' => '2000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'BBM',
                'sumber_dana' => 'Proyek UNJ',
                'besaran_nominal' => '3000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'Jepang',
                'sumber_dana' => 'Proyek TPSD Dikti',
                'besaran_nominal' => '4000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'PKPS-BBM',
                'sumber_dana' => 'Proyek TPSD Dikti',
                'besaran_nominal' => '5000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'TPSD',
                'sumber_dana' => 'Proyek TPSD Dikti',
                'besaran_nominal' => '2000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'The Tempo Group',
                'sumber_dana' => 'PKPPM Ditjen Dikti',
                'besaran_nominal' => '3000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'POM UNJ',
                'sumber_dana' => 'POM UNJ',
                'besaran_nominal' => '2000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'Bank Indonesia',
                'sumber_dana' => 'Bank Indonesia',
                'besaran_nominal' => '20000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'Dikmenti',
                'sumber_dana' => 'Dikmenti',
                'besaran_nominal' => '2000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
            beasiswa::create([
                'nama_beasiswa' => 'BMU',
                'sumber_dana' => 'yayasan Mandiri',
                'besaran_nominal' => '2000000',
                'keterangan' => '',
                'Tanggal_mulai_efektif' => '1994-12-49',
                'tanggal_akhir_efektif' => '2004-10-20'
            ]);
        }
    }

}
