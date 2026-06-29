<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Http\Requests\OfficeRequest;
use Illuminate\Support\Facades\DB;


class OfficeController extends Controller
{
    protected $office;
    public function __construct(){
        $this->office = new Office();
    }
    public function edit($office_id){
        $office = $this->office->findOrFail($office_id);
        return view("create", compact("office"));
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

    public function update(OfficeRequest $request, $office_id){
        $office = DB::transaction(function () use ($request, $office_id) {
        $office = $this->office->findOrFail($office_id);
        $office->update([
        'name' => $request->name,
        'address' => $request->address,
        'post_code' => $request->post_code,
        'stair' => $request->stair,
        'comment' => $request->comment,
        ]);
        return $office;
        });

    if($request->ajax()){
        return response()->json($office);
    }

    return redirect()->route('office.index');
    }


}

        

