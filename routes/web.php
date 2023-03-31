<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StartController::class, 'index'])->name('post.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/get-result', [App\Http\Controllers\StartController::class, 'getResult'])-> name('get-result');

Route::group(['prefix'=>'route', 'namespace'=>'App\Http\Controllers', 'as'=>'route.'],
function()
{
    Route::post("/findOnePost",[App\Http\Controllers\StartController::class,'getResult'])->name('findOnePost');
    Route::resource('home',"\IndexController");
});

// Route::post('/dashboard', function (){
//     return view('dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::middleware('auth')->group(function () {


    Route::resource('posts', PostController::class)->except('index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
