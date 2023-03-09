<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Yaro\Jarboe\Facades\Jarboe;


Route::group(Jarboe::routeGroupOptions(), function () {
    Jarboe::crud('posts', PostsController::class);
    Jarboe::crud('category', CategoryController::class);
});