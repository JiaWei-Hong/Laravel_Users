<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index(){
        return view('welcome',['data' => Users::all()]);
    }

    public function create(Request $request){
        $items = (object) $request->toarray();
        
        $user = new Users([
            'username' => $items->username,
            'account' => $items->account,
            'password' => $items->pwd
        ]);

        $user->save();

        return view('welcome');
    }
}
