<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/career-detail', [HomeController::class, 'career_detail'])->name('career-detail');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/team-detail', [HomeController::class, 'team_detail'])->name('team-detail');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/service-detail', [HomeController::class, 'service_detail'])->name('service-detail');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/project-detail', [HomeController::class, 'project_detail'])->name('project-detail');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail', [HomeController::class, 'blog_detail'])->name('blog-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
