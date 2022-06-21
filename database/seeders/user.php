<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user')->insert([
        //     'name'=>Str::random('10'),
        //     'address'=>Str::random('50')
        // ]
        // );
        $faker = Faker::create();
        foreach(range(1, 30) as $index) {
         user::create([
         'name' => $faker->sentence(5),
         'address' => $faker->paragraph(6),
    ]);
}
    }
}
