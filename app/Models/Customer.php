<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customers";// khai báo bảng mà bạn muốn truy vấn ; khai báo quan hệ 

}
