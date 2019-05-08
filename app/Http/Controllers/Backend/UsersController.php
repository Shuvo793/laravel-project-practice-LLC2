<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index(){
        echo 'showing users list';
    }
    public function show($id,Request $request){
        var_dump($request->has('page '));
        echo 'showing details of users list id:'.$id;
    }
}
