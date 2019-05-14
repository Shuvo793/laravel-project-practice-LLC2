<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;



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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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


        //validation
        /*akta form ee akathik input thakte pare akta error dile sob amar notun kore dea lagbe jeta amara nicher ai structure onujaie pabo na*/

        /*$this->validate($request,[

            'email'=>'required|email',
            'password'=>'required|min:6'

        ]);
        echo $request->input('email');
        echo "\n";
        echo $request->input('password');*/

        /*write way*/

        $validator= Validator::make($request->all(),[ //make() function ta amae amar data gula create kore dae

            'email'=>'required|email',
            'password'=>'required|min:6',
            'photo'=>'required|image|max:200'

        ]);
        $photo=$request->file('photo');
        $file_name=uniqid('photo_',true). Str::random(40).'.'.$photo->getClientOriginalExtension();
        if($photo->isValid()){ //isvalid() file ta valid kina ta cheak kore
            $photo->storeAs('images',$file_name);
        }

        if($validator->fails()){ //fails() ai function er maddhome jodi operation fail hoe taile kisu akta ghotbe
            return redirect()->back()->withErrors($validator)->withInput();
        }

        session()->flash('message','Registration successfully');

        return redirect()->back(); //redirect() aita amae sorasori akta page aa nia jaee back() amar ak page pisone nia jacce









    }
}
