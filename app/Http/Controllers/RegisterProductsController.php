<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\Products;
use DB;
class RegisterProductsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function productsShow(){
    $getPaymentItem = DB::table("payment_item")->get();
    $getWhoItem = DB::table("who_item")->get();
    return view("productsRegister.ProductsShow", compact("getPaymentItem", "getWhoItem"));
  }

  public function getProducts(){
      $products = DB::table("products")
          ->join("payment_item", "products.payment", "=", "payment_item.id")  // payment_item.id table id ийг 0 ээс эхэлж давтуулаарай
          ->join("who_item", "products.who", "=", "who_item.id")
          ->select("products.*", "payment_item.payment_type as paymentType", "who_item.who_name as whoName")
          ->where('whereTypeID', '=', Auth::user()->userTypeID)  // whereTypeId = Auth::user()->userTypeID болж өөрчлөгдөнө
          ->get();
      return DataTables::of($products)
          ->make(true);
  }

  public function store(Request $req){
    $mytime = Carbon::now();
    $mytime->toDateTimeString();

    $Product = new Products;
    $Product->bar_code_number = $req->barCode;
    $Product->imageUrl = $req->imgUrl;
    $Product->price = $req->price;
    $Product->phone = $req->phone;
    $Product->post_type = $req->postType;
    $Product->who = $req->who;
    $Product->languuNumber = $req->languuniiNumber;
    $Product->payment = $req->paymentType;
    $Product->description = $req->description;
    $Product->upload_date = $mytime;
    $Product->whereTypeID = Auth::user()->userTypeID;
    $Product->save();
    return "Амжилттай хадгаллаа.";

  }
}
