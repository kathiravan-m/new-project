<?php

namespace Package\Post\App\Http\controllers;
use App\Http\Controllers\Controller;


use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function __construct(Member $viewer)
    {
      $this->viewer = $viewer;       
    }
    public function post(){
        return view('post::welcome');
    }
    public function insert(UserRequest $request){
       $data= $this->viewer->create($request->all());
         return back();
    }
    public function showDetails()
    {
      $getUser =$this->viewer->get();
     return view('post::view',compact('getUser'));
    }
    public function userDelete($id){
      $delete=$this->viewer->where('id',$id)->delete();
      return redirect('/view');
    }
    public function editUser($id){
      $user=$this->viewer->find($id);
      return redirect('/view');
    }
    public function updateUser(Request $request){
    
      $data=$this->viewer->find($request->id)->update($request->all());
    
      return redirect('/view');
    }
    public function curl(Request $request)
    {
      $name = request()->name;
        $response = $this->viewer->where('name',$name)->first();
        if(isset($response)){ 
        return response()->json([
           'status'=>true,
           'message'=>$response]);
        }else{
      return response()->json([
        'status' => false,
        'message' => null ]);
        }
    }
 }
