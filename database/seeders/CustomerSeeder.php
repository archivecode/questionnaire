<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name' => 'Zimmo',
                'active' => 1,
            ],
            [
                'name' => 'Monotote',
                'active' => 1,
            ],
            [
                'name' => 'Pedal',
                'active' => 1,
            ],
            [
                'name' => 'Phierator',
                'active' => 1,
            ]
        ];

        DB::table('customers')->insert($customers);
    }
}
