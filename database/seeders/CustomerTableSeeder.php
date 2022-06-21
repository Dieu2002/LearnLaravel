<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $limit = 100;
        for ($i = 0; $i < $limit; $i++){
            DB::table('customers')->insert([
                'name' => $fake->name,
                'address' => $fake->sentence(15),
                'date' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
