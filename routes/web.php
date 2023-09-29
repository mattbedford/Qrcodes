<?php
Route::get('/', function () {
    return view('welcome');
});



Route::get('/submit', function () {
    return view('insertForm');
});

Route::post('/insert', 'Controller@insert');
 

