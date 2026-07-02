<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class HelloController extends Controller
{
    public function index(){
        return view('hello');
    }
}
