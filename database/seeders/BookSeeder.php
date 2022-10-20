<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Homework 2 (Connect Database)
        // Tạo dữ liệu theo yêu cầu dưới
        // {name: 'math', description: 'Algebra, Amusements, Calculus, Combinatorics'}
        // {name: 'literature', 'fiction, poetry, modern drama'}
        DB::table('books')->insert([
            [
                'name' => 'math',
                'description' => 'Algebra, Amusements, Calculus, Combinatorics'
            ],
            [
                'name' => 'literature',
                'description' => 'fiction, poetry, modern drama'
            ]
        ]);
    }
}
