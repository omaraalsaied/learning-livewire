<?php

use Illuminate\Support\Facades\Route;
use App\livewire\Counter;
use App\livewire\Todo;
use App\livewire\ShowPosts;
use App\livewire\CreatePost;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Counter::class);
Route::get('/todo', Todo::class);
Route::get('/posts', ShowPosts::class);
Route::get('/create-post', CreatePost::class);
