<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->role === '1'){
            return redirect()->route('units.index');
        }
        if(Auth::user()->role === '0'){
            return redirect()->route('semesters.index');
        }
    }
   
}
