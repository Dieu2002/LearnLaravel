<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function addRoom(HotelRequest $Request)
    {
        $image = $Request->file('anh');
        $path = $image->move('anh', $image->getClientOriginalName());

        $newProduct = [
            'danhmuc' => $Request->danhmuc,
            'spnb' => $Request->spnb,
            'ten' => $Request->ten,
            'gia' => $Request->gia,
            'giacu' => $Request->giacu,
            'anh' => $anh->getClientOriginalName(),
        ];

        if (isset($_SESSION['product'])) {
            $_SESSION['product'][] = $newProduct;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['product'][] = $newProduct;
        }
        echo '<script>alert("Thêm phòng thành công")</script>';
        return view('home');
    }
}