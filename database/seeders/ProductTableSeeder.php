<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>"ao khoac nam",
                    'image'=>"Image/khoacnam1.jpg",
                    'description'=>"ao dep gianh cho nam",
                    'quantity'=>3,
                    'cate_id'=>1
                ],
                [
                    'name'=>"dam da hoi",
                    'image'=>"Image/damdahoi2.jpg",
                    'description'=>"dam da hoi de thuong ne",
                    'quantity'=>3,
                    'cate_id'=>2,
                ],
                [
                    'name'=>"tui sach",
                    'image'=>"Image/ts1.webp",
                    'description'=>"tui sach dep ne",
                    'quantity'=>6,
                    'cate_id'=>3
                ]
            ]
            );
    }
}
