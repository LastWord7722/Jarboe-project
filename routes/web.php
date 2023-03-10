<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Yaro\Jarboe\Facades\Jarboe;



Route::group(Jarboe::routeGroupOptions(), function () {
    Jarboe::crud('post', PostsController::class);
    Jarboe::crud('category', CategoryController::class);
    Jarboe::crud('tag', TagController::class);

    Route::get('/post{id}', \Yaro\Jarboe\Table\Actions\ShowAction::class, 'render')->name('posts');

});