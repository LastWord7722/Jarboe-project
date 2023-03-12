<?php

use App\Actions\ShowAction;
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
Route::get('admin/posts/{post}',[PostsController::class, 'show'])->name('admin.show');
Route::get('admin/posts/az',[PostsController::class, 'filterAZ'])->name('admin.toolbar.filter');
