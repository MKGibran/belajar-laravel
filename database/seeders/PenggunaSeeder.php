<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::create([
            'nama' => 'Gibran',
            'umur'  => 20
        ]);
    }
}
