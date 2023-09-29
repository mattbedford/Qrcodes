<?php
Route::get('/', function () {
    return view('home');
});


Route::get('/submit', function () {
    return view('insertForm');
});

Route::post('/insert', 'Controller@insert');
 
