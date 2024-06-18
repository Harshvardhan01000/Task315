<?php

namespace App\Http\Middleware;

use App\Models\validate_user;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkRollMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userRoll = validate_user::where('email',$request->email)->first();

        if($userRoll){
            if($userRoll->roll == 'admin'){
                return redirect()->route('todo.index');
            }else{
                return response('limited to admin');
            }
        }else{
            return response('enter valid user');
        }
        
    }
}
