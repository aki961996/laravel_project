<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frondEndController;

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


route::get('/', [frondEndController::class, 'homePage'])->name('home');

route::get('about', [frondEndController::class, 'aboutPage'])->name('about');

route::get('contact', [frondEndController::class, 'contactPage'])->name('contact');


//add
route::get('user-add', [frondEndController::class, 'userAdd'])->name('user.add');

//add post
Route::post('save-user', [frondEndController::class, 'store'])->name('save.user');
