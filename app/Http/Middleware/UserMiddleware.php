<?php

namespace App\Http\Middleware;

use Closure;
use App\Users;
use Illuminate\Support\Facades\Session;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
       $items = Users::where(['account' => $request->account,'password' => $request->password])
                                                                                        ->get()
                                                                                        ->toarray();
                                                                                        
        if(count($items) == 0){
            return response('Data Not Found',400); // Status Code
        }else{
            Session::put('username',$items[0]['username']);
            Session::put('permission',$items[0]['permission']);
            return $next($request);
        }
    }
}
