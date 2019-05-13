<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data=[];
        $data['title']='Ecommerce';
        $data['date']=date('Y m d');
        $data['links']=[
            'facebook'=>'https://www.facebook.com',
            'linkdin'=>'https://www.linkdin.com',
            'laravel'=>'https://laravel.com',
            'bootstrap'=>'https://getbootstrap.com'
        ];
        return view('home',$data);
    }

    public function user($id,$name=''){
        echo $id.''.$name;
    }
}
