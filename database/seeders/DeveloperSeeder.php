<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = [
            [ 'name' => 'Ahmed', 'active' => 1 ],
            [ 'name' => 'Ammad', 'active' => 1 ],
            [ 'name' => 'Atif', 'active' => 1 ],
            [ 'name' => 'Awais', 'active' => 1 ],
            [ 'name' => 'Ehsan', 'active' => 1 ],
            [ 'name' => 'Imam', 'active' => 1 ],
            [ 'name' => 'Junaid', 'active' => 1 ],
            [ 'name' => 'Mussawir', 'active' => 1 ],
            [ 'name' => 'Nauman', 'active' => 1 ],
            [ 'name' => 'Omer', 'active' => 1 ],
            [ 'name' => 'Raheel', 'active' => 1 ],
            [ 'name' => 'Rasheed', 'active' => 1 ],
            [ 'name' => 'Shoaib', 'active' => 1 ],
            [ 'name' => 'Tamoor', 'active' => 1 ],
            [ 'name' => 'Tayyab', 'active' => 1 ],
            [ 'name' => 'Waqar', 'active' => 1 ],
            [ 'name' => 'Usama', 'active' => 1 ],
            [ 'name' => 'Usman', 'active' => 1 ],
            [ 'name' => 'Zubair', 'active' => 1 ],
        ];

        DB::table('developers')->insert($developers);
    }
}
