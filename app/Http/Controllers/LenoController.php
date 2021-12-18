<?php

namespace App\Http\Controllers;
use App\Models\Leno;
use Illuminate\Http\Request;

class LenoController extends Controller
{
    function leno(){
      $data=Leno::all();
      return view('/leno',['leno'=>$data]);
      return $data;
    }
    function detail($id){
      $data = Leno::find($id);
      return view('leno-details',['leno'=>$data]);
      }
}
