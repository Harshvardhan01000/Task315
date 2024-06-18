<?php

namespace App\Http\Controllers;

use App\Models\validate_user;
use Illuminate\Http\Request;

class validationController extends Controller
{
    public function valid(Request $request){
        // dd($request->email);
        //  $userRoll = validate_user::where('email','=',$request->email)->get();
        // dd($userRoll);
        
        $data = $request->all();
        return view('welcomepage',compact('data'));
    }
}
