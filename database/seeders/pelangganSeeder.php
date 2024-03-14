<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            'nama' => "test 1",
            'alamat' => "jl dcd",
            'jenis_kelamin' => 'laki',
            'no_telephone' => '08000707'
    ]);
    }
}
