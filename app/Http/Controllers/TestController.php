<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }

    public function index2(){
        return view('test2');
    }
}
