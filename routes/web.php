<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Route;


//homepage

Route::get('/',HomeComponent::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//for user or customer

Route::middleware(['auth:sanctum','verified'])->group(function(){

    Route::get('/user/dashboard',UserDashboard::class)->name('user.dashboard');
});

//admin

Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');


});
