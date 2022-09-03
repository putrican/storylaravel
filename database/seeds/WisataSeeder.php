<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wisata')->insert([
          'tempat_wisata' => 'Cibubur',
          'provinsi' => 'Jawa barat',
          'jumlah_pengunjung' => '100'

        ]);

        DB::table('wisata')->insert([
            'tempat_wisata' => 'Pelabuhan ratu',
            'provinsi' => 'Jawa barat',
            'jumlah_pengunjung' => '200'
  
          ]);

        DB::table('wisata')->insert([
            'tempat_wisata' => 'Candi Sana',
            'provinsi' => 'Jawa Tengah',
            'jumlah_pengunjung' => '100'
  
          ]);

        DB::table('wisata')->insert([
            'tempat_wisata' => 'Pantai Sawarna',
            'provinsi' => 'Jawa barat',
            'jumlah_pengunjung' => '300'
  
          ]);
    }
}
