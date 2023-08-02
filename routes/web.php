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


Route::get('/', [frondEndController::class, 'homePage'])->name('home');

Route::get('about', [frondEndController::class, 'aboutPage'])->name('about');

Route::get('contact', [frondEndController::class, 'contactPage'])->name('contact');
// Route::get('loans', [frondEndController::class, 'loanPage'])->name('loan');


//add
Route::get('user-add', [frondEndController::class, 'userAdd'])->name('user.add');

//add post
Route::post('save-user', [frondEndController::class, 'store'])->name('save.user');

//eidt
Route::get('edit-user/{user_id}', [frondEndController::class, 'editUser'])->name('edit-user');

//update

Route::post('update-user', [frondEndController::class, 'updateUser'])->name('update.user');

//delet user
Route::get('delete-user/{user_id}', [frondEndController::class, 'deleteUser'])->name('delete-user');


Route::get('investors', [frondEndController::class, 'investorsPage'])->name('user.investors');

//cleent add
Route::get('investorsAdd', [frondEndController::class, 'investorsAdd'])->name('client.add');

Route::post('investorsStore', [frondEndController::class, 'investorsStore'])->name('client.store');
