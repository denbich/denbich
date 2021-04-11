<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}/{age}', function (string $name, int $age) {

    echo "Cześć ". $name . ", masz ". $age . " lat.";

});

Route::get('/hello/{name?}/{age?}', function (string $name = "nieznajomy", int $age = null) {

    echo "Witaj ".$name.", ";
    if (is_null($age))
    {
        echo "Nie podałeś wieku!";
    } else {
        echo "Masz już ".$age." lat.";
    }

})->name('Powitanie');
