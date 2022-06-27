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
    public function getIndexHome(){
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
    // public function getDetail(Request $request){
    //     $sanpham=Product::where::('id',$request->id)->first();
    //     $splienquan=Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type,)->paginate(3);
    //     $comment = Comment::where('id_product',$request->$id)->get();
    //     return view('page.chitietsp',compact('sanpham','splienquan','comments'));
    // }
   // crud 
    public function getAdminAdd(){
    return view ('pageAdmin.formAdd');
    }
    public function getIndexAdmin(){
    $products = Product ::all();
    return view('pageAdmin.admin', compact('products')); 
    }
    public function postAdminAdd(Request $request){
        $product= new Product();
        if ($request->hasFile('inputImage')){
            $file = $request -> file ('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $fileName=null;
        if ($request->file('inputImage')!=null){
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
        return redirect('/showadmin')->with('success', 'Đã thêm thành công');

    }
    public function Editform(){
        return view ('pageAdmin.formEdit');
    }

    public function getAdminEdit($id){
        $product = product::find($id);
        return view('pageAdmin.formEdit')->with('product',$product);
    }

    public function postAdminEdit(Request $request){
        $id = $request->editId;

        $product = Product::find($id);
        if($request->hasFile('editImage')){
            $file = $request -> file ('editImage');
            $fileName=$file->getClientOriginalName('editImage');
            $file->move('source/image/product',$fileName);
        }
        if ($request->file('editImage')!=null){
            $product ->image=$fileName;
        }
        $product->name=$request->editName;
        // $product->image=$file_name;
        $product->description=$request->editDescription;
        $product->unit_price=$request->editPrice;
        $product->promotion_price=$request->editPromotionPrice;
        $product->unit=$request->editUnit;
        $product->new=$request->editNew;
        $product->id_type=$request->editType;
        $product->save();
        return redirect('/showadmin');
    }
    public function postAdminDelete($id){
        $product =Product::find($id);
        $product->delete();
        return redirect('/showadmin');
    }
}
