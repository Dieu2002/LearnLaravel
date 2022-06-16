<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xinchao(){
        $title="Đây là tiêu đề nè hi";
        return view('test')->with('title',$title);
    }
}
