<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Controller
{
    public function createTable(){
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('quantity');
            $table->timestamps();
        });
        
        if(!Schema::hasTable('products')){
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('quantity');
            $table->timestamps();
        }
        // bảng 2
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->date('date');
            $table->timestamps();
        });
        echo"đã tạo bảng thành công ";
        if(!Schema::hasTable('customers')){
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->date('date');
            $table->timestamps();
        }
    }
   
}
