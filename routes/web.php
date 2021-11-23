<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;


Route::get('/home', function () {
    return "welcome to laravel 6.0";
});

// // Route::get('welcome/{name}', function ($name) {
// //     return "welcome to laravel 6.0, ".$name;
// // });


// Route::get('welcome/{name?}', function ($name="guest") {
//     return "welcome to laravel 6.0,    ".$name;
// });

Route::view('/','/welcome', ['name'=>'Muhammad Zahid', 'company'=>'perfect web solution']);

Route::get('welcome', [WelcomeController::class, 'welcome']);

Route::resource('post', PostController::class);



