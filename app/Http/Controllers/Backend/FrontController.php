<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function  index(){
        $data=[];
        $data['data']='saturday';
        return view('welcome',$data);
    }
}
