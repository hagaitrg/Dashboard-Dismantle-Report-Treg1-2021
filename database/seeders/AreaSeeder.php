<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'id' => 1,
                'name' => 'Aceh'
            ],
            [
                'id' => 2,
                'name' => 'Babel'
            ],
            [
                'id' => 3,
                'name' => 'Bengkulu'
            ],
            [
                'id' => 4,
                'name' => 'Jambi'
            ],
            [
                'id' => 5,
                'name' => 'Lampung'
            ],
            [
                'id' => 6,
                'name' => 'Medan'
            ],
            [
                'id' => 7,
                'name' => 'Ridar'
            ],
            [
                'id' => 8,
                'name' => 'Rikep'
            ],
            [
                'id' => 9,
                'name' => 'Sumbar'
            ],
            [
                'id' => 10,
                'name' => 'Sumsel'
            ],
            [
                'id' => 11,
                'name' => 'Sumut'
            ]
        ]);
    }
}
