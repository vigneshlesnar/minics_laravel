<?php

namespace App\Http\Controllers;
use App\Models\Pp;
use Illuminate\Http\Request;

class PpController extends Controller
{
  function pp(){
    $data=Pp::all();
    return view('/pp',['pp'=>$data]);
    return $data;
  }
  function detail($id){
    $data = Pp::find($id);
    return view('pp_details',['pp'=>$data]);
    }
}
