<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('examples')->insert([
            [
                'name' => 'example 1',
                'description' => 'example 1 bla bla',
            ],
            [
                'name' => 'example 2',
                'description' => 'example 2 bla bla',
            ],
        ]);
    }
}
