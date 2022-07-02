<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class authController extends Controller
{
   public function register(Request $request){
    $data = new User;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = Hash::make($request->password);
    $saved = $data->save();
    if($saved){
        return response(['message'=>'User has been saved successfully']);
    }
    else{
        return response(['message'=>'An error occured']);
    }


   }

   public function signin(Request $request){

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
         $authUser = Auth::user(); 
         $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken; 
         $success['name'] =  $authUser->name;

        return Response(['message'=>'user signed in', $success]);
    } 
    else{ 
       return response(['message'=>'Unauthorized unser']);
    } 

   }

   public function returnUsers(){
    return User::all();
   }
}
