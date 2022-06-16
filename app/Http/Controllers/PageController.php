<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    public function getLoaiSP(){
        return view('page.loaisanpham');
    }
    public function getChitietSP(){
        return view('page.chitietsp');
    }
    public function getContact(){
        return view('page.lienhe');
    }
    public function getAbout(){
        return view('page.about');
    }

}
