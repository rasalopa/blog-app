<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigUserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('', [HomeController::class, 'index'])->middleware("can:admin.index")->name('admin.index');

    // ! Gestión de usuarios
    Route::resource('c_users', ConfigUserController::class)->names('admin.c_users');
    //! Gestión de roles de usuario
    Route::resource('r_users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.r_users');
    Route::resource('roles', RoleController::class)->names('admin.roles');
    
    Route::resource('categories', CategoryController::class)->except("show")->names('admin.categories');
    Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
    Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
});
