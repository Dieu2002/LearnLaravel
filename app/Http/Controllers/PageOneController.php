<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;


class PageOneController extends Controller
{
    public function getIndex(){
        $slide= Slide::all();
        $new_product=Product::where('new',1)->paginate(4);
        $promotion_product=Product ::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','promotion_price'));
    }
}
