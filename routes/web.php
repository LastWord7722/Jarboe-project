<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Yaro\Jarboe\Facades\Jarboe;


Route::group(Jarboe::routeGroupOptions(), function () {
    Jarboe::crud('posts', PostsController::class);
});