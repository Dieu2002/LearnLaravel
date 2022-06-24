<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\ServiceProvider;

use App\Http\Requests\formAdd;


class PageOneController extends Controller
{
    public function getIndex(){
        $slide= Slide::all();
        $new_product=Product::where('new',1)->paginate(4);
        $promotion_product=Product ::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','promotion_product'));
    }
    public function getLoaiSp($type){
        $type_product=ProductType::all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3);
        return view('page.loaisanpham',compact('sp_theoloai','type_product','sp_khac'));
    }
    public function getChitiet(){
        return view('page.chitietsp');
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getAbout(){
        return view('page.about');
    }
   // crud 
    public function getAdminAdd(){
        return view('pageAdmin.formAdd');
    }
    public function postAdminAdd(Request $request){
        $product = new Product();
        if($request->hasFile('inputImage')){
            $file=$request->file('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $file_name=null;
        if($request->file('inputImage')!=null){
            $file_name=$request->file('inputImage')->getClientOriginalName();
        }
        $product->name=$request->inputName;
        $product->image=$file_name;
        $product->description=$request->inputDescription;
        $product->unit_price=$request->inputPrice;
        $product->promotion_price=$request->inputPromotionPrice;
        $product->unit=$request->inputUnit;
        $product->new=$request->inputNew;
        $product->id_type=$request->inputType;
        $product->save();
        return $this->getAdminAdd();
    }
}
