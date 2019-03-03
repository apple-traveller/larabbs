<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {

        return view('pages.root');
    }

//    public function root()
//    {
//        dd(\Auth::user()->hasVerifiedEmail());//验证邮箱是否验证
//        return view('pages.root');
//    }
}
