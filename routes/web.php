<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// mengirimkan data key variabel title dengan value BLOG ke route nya
Route::get('/blog', function () {
    return view('blog' ,  ['title' => "BLOG", 'subtitle' => "Blog kecil"]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "INI CONTAKSU", 'subtitle' => "Contact Kecil"]);
});

Route::get('/home', function () {
    return view('home', ['title' => "Homepage", 'subtitle' => "Home kecil"]);
});



// Route::get('/spacex', function () {
//     return view('Spacex');
// });

// Route::get('/testis', function () {
//     return view('testis', array('nama' => "Sutan"));
// });


