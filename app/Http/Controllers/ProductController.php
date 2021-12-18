<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  function product() {

$data=Product::all();
    return view('product',['products'=>$data]);

}
function detail($id){
$data = Product::find($id);
return view('product_detail',['product'=>$data]);
}
}
