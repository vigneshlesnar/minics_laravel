<?php

namespace App\Http\Controllers;
use App\Models\Tar;
use Illuminate\Http\Request;

class TarController extends Controller
{
  function tar() {

    $data=Tar::all();
        return view('tar',['tar'=>$data]);
    
    }
    function detail($id){
    $data = Tar::find($id);
    return view('tar_detail',['tar'=>$data]);
    }
}
