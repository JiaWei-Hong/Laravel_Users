<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome',['data' => Users::all()]);
    }

    public function userDelete($id)
    {
        Users::find($id)->delete();
        echo "<script>alert('Delete Success!');location.href='../';</script>";
        return view('welcome',['data' => Users::all()]);
    }

    public function userAdd(Request $request)
    {
        $items = (object) $request->toarray();
        
        $exist = Users::where('username',$items->username)
                                                    ->get()
                                                    ->toarray();

        if(count($exist) > 0){
            echo "<script>alert('AddUser Success!');location.href='../';</script>";
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

    public function userSearch(Request $request)
    {
        $items = (object) $request->toarray();

        $ans = Users::where('username',$request->username)
                                                    ->get()
                                                    ->toarray();

        echo "<script>alert('Search Success');location.href='../';</script>";
        return view('welcome',['data' => $ans]);
    }

    public function userUpdate(Request $request)
    {
        $items = Users::where('id',$request->id)->update(['password'=> $request->pwd]);
        return response('密碼更新成功',200);
    }

    public function userLogin(Request $request)
    {
        dd(Session::all());
    }

    public function userLogout(){
        Session::flush();

        return view('welcome',['data' => Users::all()]);
    }
}
