<?php

namespace App\Http\Controllers;
use App\Models\Jute;
use Illuminate\Http\Request;

class JuteController extends Controller
{
  function jute() {

    $data=Jute::all();
        return view('/jute-product',['jute'=>$data]);
        return $data;
    
    }
    function detail($id){
      $data = Jute::find($id);
      return view('jute-details',['jute'=>$data]);
      }
}
