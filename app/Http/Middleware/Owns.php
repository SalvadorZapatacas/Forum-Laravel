<?php

namespace App\Http\Middleware;

use App\Thread;
use Closure;
use Illuminate\Support\Facades\Auth;

class Owns
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
        $thread = Thread::findOrFail($request->thread);

        if ($thread->user_id != Auth::user()->id)
        {
            abort(404);
        }

        return $next($request);
    }
}
