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
        
        $exist = Users::where('username',$items->username)
                                                    ->get()
                                                    ->toarray();

        if(count($exist) > 0){
            echo "<script>alert('此帳號已被註冊，換個帳號試試看!');</script>";
        }else{
            $user = new Users([
                'username' => $items->username,
                'account' => $items->account,
                'password' => $items->pwd
            ]);
            $user->save();
        }

        return view('welcome',['data' => Users::all()]);
    }
}
