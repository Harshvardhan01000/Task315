<?php

namespace App\Http\Middleware;

use \Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class validationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $mytime = Carbon::now('Asia/Kolkata');    
        
        $startTime = Carbon::parse('04:00:00')->setTimezone('Asia/Kolkata');
        $endTime = Carbon::parse('14:00:00')->setTimezone('Asia/Kolkata');
        if($mytime->isBetween($startTime,$endTime) ){
            if( ($request->age)>18){
                return $next($request);
            }else{
            return response('age limit');
            }
        }else{
            return response('time out');
        }
    }
}
