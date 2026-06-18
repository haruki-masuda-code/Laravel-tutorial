<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class HelloController extends Controller
{
    public function index(){
        $first = Office::find(1);

        return view('hello',[
            'first' => $first,
        ]);
    }
}
