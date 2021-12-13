<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\postType;
use App\Http\Controllers\PostContorller;

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

// Route::get('/', function () {
//   //  return User::find(1)->with("posts")->first();
//   //  return Post::find(1)->with("user")->first();
//     // return postType::find(1)->with("posts")->first();
//     return view('welcome');
// });

Route::get('/',[PostContorller::class,'index']);
Route::post('/search',[PostContorller::class,'search'])->name('search');
Route::get('/showBook/{id}',[PostContorller::class,'showBook'])->name('showBook');



Route::middleware(['auth'])->group(function () {

Route::get('/dashboard',[PostContorller::class,'dashboard'])->name('dashboard');
Route::post('/newPost',[PostContorller::class,'newPost'])->name('newPost');
Route::get('/changeStatu/{id}',[PostContorller::class,'changeStatu'])->name('changeStatu');



  
  });
  

require __DIR__.'/auth.php';
