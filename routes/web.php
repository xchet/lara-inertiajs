<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/users', function () {
    return inertia('Users',[
        'time' => now()->toTimeString()
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging user out of the system!');
});
