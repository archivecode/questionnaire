<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerDeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customersDevelopers = [
            [ 'customer_id' => 1, 'developer_id' => 11 ],
            [ 'customer_id' => 1, 'developer_id' => 16 ],
            [ 'customer_id' => 2, 'developer_id' => 3 ],
            [ 'customer_id' => 2, 'developer_id' => 7 ],
            [ 'customer_id' => 2, 'developer_id' => 9 ],
            [ 'customer_id' => 3, 'developer_id' => 1 ],
            [ 'customer_id' => 3, 'developer_id' => 13 ],
            [ 'customer_id' => 3, 'developer_id' => 19 ],
            [ 'customer_id' => 4, 'developer_id' => 5 ],
        ];

        DB::table('customers_developers')->insert($customersDevelopers);
    }
}
