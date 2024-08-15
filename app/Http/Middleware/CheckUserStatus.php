<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserStatus
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
        $user= Auth::user();
        
        if($user->status == 'blocked'){
            
        //   return redirect()->route('admin.complains.index')->with('warning','You Are Account Is Blocked For Some Reason');
    
        }elseif($user->status == 'pending'){
            
            // return redirect()->route('admin.complains.index')->with('warning','You Are Account Is Not Approved');
            
        }elseif($user->status == 'disabled'){
                
        //    return redirect()->route('admin.complains.index')->with('warning','You Are Account Is Disabled');
                
        }

        return $next($request);
    }
}
