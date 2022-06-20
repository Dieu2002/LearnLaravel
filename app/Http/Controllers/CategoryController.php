<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CategoryController extends Controller
{
   public function Category(){
    // bảng categories
    Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });
    // bảng products 
    Schema::create('products', function (Blueprint $table) {
        $table->increments('pr_id');
        $table->string('name');
        $table->string('image');
        $table->increments('cate_id');
        $table->string('description');
        $table->integer('quantity');
        $table->timestamps();
    });
    echo"tạo bảng thành công";
   }
 
}
