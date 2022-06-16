<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addProductController extends Controller
{
    public function index(){
        return view('addProduct');
    }
    public function handelProduct(){

        $image = $Request->file('image');
        $path = $image->move('images', $image->getClientOriginalName());


        $newProduct = [
            'name' => $Request->prName,
            'quantity'=>$Request ->prQuantity,
            'price' => $Request->prPrice,
            'description' => $Request->prDescription,
            'image' => $image->getClientOriginalName(),
        ];

        if (isset($_SESSION['product'])) {
            $_SESSION['product'][] = $newProduct;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['product'][] = $newProduct;
        }
        echo '<script>alert("Thêm sản phẩm thành công")</script>';
        return view('addProduct');
    }
    public function showProduct(){
        return view('showProduct');
    }

}

