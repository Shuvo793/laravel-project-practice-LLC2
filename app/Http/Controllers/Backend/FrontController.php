<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /*public function  index(){
        $data=[];
        $data['data']='saturday';
        return view('home',$data);
    }*/
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
    public function showRegistrationFrom(){
        $data=[];
        $data['title']='Ecommerce';
        $data['date']=date('Y m d');
        $data['links']=[
            'facebook'=>'https://www.facebook.com',
            'linkdin'=>'https://www.linkdin.com',
            'laravel'=>'https://laravel.com',
            'bootstrap'=>'https://getbootstrap.com'
        ];
        return view('register',$data);
    }

    public function processRegistration(Request $request){ //(Request $request) dependence injection sara direct Request() mathod dia kora jae
        //$request->all(); all() dile sob data pabo

        /*$fillable and $gurded er moto kore kaj kore*/
        //return $request->only(['email','password']); only() dile specifiq data ene dibe
        //return $request->except(['_token']); except() dile je data amra nibo na saita bole dile ee holo

        /*akta akta valu ante chaile*/
        //echo $request->input('email');
        //echo $request->input('password');
        /*another way*/
        //echo $request->email;
        //echo $request->password;


        /*Request() method getting data*/
        //echo Request()->input('email');
        //echo Request()->input('password');









    }
}
