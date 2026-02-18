<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation/{name}/{prelim}/{midterm}/{final}', function ($name, $prelim, $midterm, $final) {

    $average = ($prelim + $midterm + $final) / 3;

    return view('welcome', [
        'name' => $name,
        'prelim' => $prelim,
        'midterm' => $midterm,
        'final' => $final,
        'average' => $average
    ]);
});
