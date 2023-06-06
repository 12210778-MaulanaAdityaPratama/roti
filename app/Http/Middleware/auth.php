<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\admin\PelangganController;
use Illuminate\Support\Facades\Route;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Route::get('/admin/profile', [AdminProfileController::class, 'admin'])
    ->status('admin')
    ->middleware('auth');

        Route::get('/user/dashboard', [UserProfileController::class, 'user'])
    ->status('user')
    ->middleware('auth');

    Route::get('/admin/pelanggan', [PelangganController::class, 'admin'])
    ->status('admin')
    ->middleware('auth');
        return $next($request);
    }
}
