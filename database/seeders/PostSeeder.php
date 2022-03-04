<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
        nombrepastel => 'Chocolate', 
        ingredientes => 'harina leche huevos chocolate',
        porciones => '12',
        precio => 150
        ];
        DB::table('posts')->insert($data);
    }
}
