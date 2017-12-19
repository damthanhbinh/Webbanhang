<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Tra ve view den trang chu    
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->get();
        return view('pages.trangchu',compact('slide','new_product'));
    }
    //Tra ve view den trang gioi thieu (about)
    public function getAbout(){
        return view('pages.gioithieu');
    }
    //Tra ve view den trang san pham
    public function getProduct(){
        return view('pages.sanpham');
    }

    //Tra ve view den trang lien he
    public function getContact(){
        return view('pages.lienhe');
    }

    //Tra ve view den trang loai san pham
    public function getProductType(){
        return view('pages.loaisanpham');
    }
    
    
}
