<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Http\Requests\OfficeRequest;


class OfficeController extends Controller
{
    protected $office;
    public function __construct(){
        $this->office = new Office();
    }
    public function create(){
        return view('create');
    }
    public function index(){
        $data = $this->office->getData();
        return view('show',compact('data'));
    }

    public function store(OfficeRequest $request){
    $registerOffice = $this->office->create([
      'name' => $request->name,
      'address' => $request->address,
      'post_code' => $request->post_code,
      'stair' => $request->stair,
      'comment' => $request->comment,
    ]);
    if($request->ajax()){
        return response()->json($registerOffice);
    }
    return redirect()->route('office.create');

    }
        
}
