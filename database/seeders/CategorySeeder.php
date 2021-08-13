<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            /***********************************************/
            [ 'name' => 'Role', 'parent_id' => 0 ],//1
            [ 'name' => 'Relation', 'parent_id' => 0 ],//2
            [ 'name' => 'Person', 'parent_id' => 0 ],//3

            /***********************************************/
            [ 'name' => 'Output', 'parent_id' => 1 ],//4
            [ 'name' => 'Engine', 'parent_id' => 1 ],//5
            [ 'name' => 'Input', 'parent_id' => 1 ],//6
            [ 'name' => 'Social Support', 'parent_id' => 2 ],//7
            [ 'name' => 'Connection', 'parent_id' => 2 ],//8
            [ 'name' => 'Stability of Relationship', 'parent_id' => 2 ],//9
            [ 'name' => 'Appreciation', 'parent_id' => 3 ],//10
            [ 'name' => 'Work Enjoyment', 'parent_id' => 3 ],//11
            [ 'name' => 'Psychological Safety', 'parent_id' => 3 ],//12

            /***********************************************/
            [ 'name' => 'Operational', 'parent_id' => 4 ],//13
            [ 'name' => 'Expertise', 'parent_id' => 5 ],//14
            [ 'name' => 'Autonomy', 'parent_id' => 5 ],//15
            [ 'name' => 'Motivation', 'parent_id' => 6 ],//16
            [ 'name' => 'Commitment', 'parent_id' => 6 ],//17
            [ 'name' => 'Business Knowledge', 'parent_id' => 6 ],//18
            [ 'name' => 'Team', 'parent_id' => 6 ],//19
            [ 'name' => 'feedback', 'parent_id' => 6 ],//20
            [ 'name' => 'Stability of Role', 'parent_id' => 6 ],//21
            [ 'name' => 'Shared Vision of Future', 'parent_id' => 9 ],//22
            [ 'name' => 'Personal feedback', 'parent_id' => 10 ],//23
            [ 'name' => 'Recognition', 'parent_id' => 10 ],//24
            [ 'name' => 'Team Celebrations', 'parent_id' => 10 ],//25
            [ 'name' => 'Challenge', 'parent_id' => 11 ],//26
            [ 'name' => 'Pride', 'parent_id' => 11 ],//27
            [ 'name' => 'Joy', 'parent_id' => 11 ],//28
            [ 'name' => 'Safe to Learn', 'parent_id' => 12 ],//29
            [ 'name' => 'Safe to Contribute', 'parent_id' => 12 ],//30

            /***********************************************/
            [ 'name' => 'Result', 'parent_id' => 13 ],//31
            [ 'name' => 'Quality', 'parent_id' => 13 ],//32
            [ 'name' => 'Speed', 'parent_id' => 13 ],//33
            [ 'name' => 'Technical Skills', 'parent_id' => 14 ],//34
            [ 'name' => 'Strategic Skills', 'parent_id' => 14 ],//35
            [ 'name' => 'Skill Development', 'parent_id' => 14 ],//36
            [ 'name' => 'Communication', 'parent_id' => 14 ],//37
            [ 'name' => 'Proactivity', 'parent_id' => 18 ],//38
            [ 'name' => 'Planned Projects', 'parent_id' => 18 ],//39
            [ 'name' => 'Future Organization', 'parent_id' => 21 ],//40
            [ 'name' => 'Long Term Plans', 'parent_id' => 21 ],//41

            /***********************************************/
            [ 'name' => 'Deadlines', 'parent_id' => 33 ],//42
            [ 'name' => 'Efficiency', 'parent_id' => 33 ],//43
            [ 'name' => 'Communication Skills', 'parent_id' => 37 ],//44
            [ 'name' => 'Communication Etiquette', 'parent_id' => 37 ],//45
            [ 'name' => 'Spoken Communication', 'parent_id' => 37 ],//46
            [ 'name' => 'Communication Plan', 'parent_id' => 37 ],//47
            [ 'name' => 'Documentation', 'parent_id' => 37 ],//48
        ];

        DB::table('categories')->insert($categories);
    }
}
