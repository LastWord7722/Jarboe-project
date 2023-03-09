<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Yaro\Jarboe\Facades\Jarboe;


Route::group(Jarboe::routeGroupOptions(), function () {
    Jarboe::crud('posts', PostsController::class);
    Jarboe::crud('category', CategoryController::class);
    Jarboe::crud('tag', TagController::class);
});