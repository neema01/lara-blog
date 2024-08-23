<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype=='user'){
                return view('dashboard');
            }
            if($usertype=='admin'){
                return view('admin.adminhome');
            }
        }

    }

    public function homepage(){
        return view('home.homepage');
    }
    
}
