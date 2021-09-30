<?php

namespace Package\Post\App\Http\controllers;
use App\Http\Controllers\Controller;

use Package\Post\App\Models\Viewer;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Viewer $viewer)
    {
      $this->viewer = $viewer;       
    }
    public function post(){
        return view('post::welcome');
    }
    public function insert(Request $request){
       $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:userss_tables',
            'role'=>'required',       
       ]);
       $data= $this->viewer->create($request->all());
       return back();



    }
}
