<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('contact::contact');
})->name('contact');

// Route::group(['namespace'=>'Bitfumes\Contact\Http\Controllers'],function () {
    // Route::get('contact', [ContactController::class,'index'])->name('contact');
    // Route::post('contact', [ContactController::class,'send']);


    Route::post('contact', function (Request $request) {
         return $request->all();
});
// });



