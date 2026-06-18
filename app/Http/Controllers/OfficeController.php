<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    protected $office;
    public function __construct(){
        $this->office = new Office();
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
    $this->office->create([
      'name' => $request->name,
      'address' => $request->address,
      'post_code' => $request->post_code,
      'stair' => $request->stair,
      'comment' => $request->comment,
    ]);
    return redirect()->route('office.create');

    }
        
}
