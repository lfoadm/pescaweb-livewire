<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowFishes
};

Route::get('fishes', ShowFishes::class);

Route::get('/', function () {
    return view('welcome');
});
