<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/posts/{post}', [PostsController::class, 'show']);

route::get('/', [IndexController::class, 'show']);

route::get('/profile', [ProfileController::class, 'show']);

//route::get('/blog', [BlogController::class, 'show']);

route::get('/faq', [FaqController::class, 'show']);
route::get('/faq/create', [FaqController::class, 'create']);
route::post('/faq', [FaqController::class, 'store']);

route::get('/dashboard', [DashboardController::class, 'show']);

route::get('/contact', [ContactController::class, 'show']);

route::get('/articles', [ArticlesController::class, 'index']);
route::post('/articles', [ArticlesController::class, 'store']);
route::get('/articles/create', [ArticlesController::class, 'create']);
route::get('/articles/{id}', [ArticlesController::class, 'show']);
