<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $test = "テスト";
        $integer = "5";
        return view('hello',[
            'test_blade' => $test,
            'integer_blade' => $integer,
        ]);
    }
}
