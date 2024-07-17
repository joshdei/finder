<?php

use Illuminate\Support\Facades\Route;
use App\Models\CompletProfile;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $userid = Auth::user()->id;
        $check  = CompletProfile::where('userid',$userid);
        if ($check){
            return view('dashboard');
        }else{
            return view('completeprofile');
        }
       
    })->name('dashboard');
});
