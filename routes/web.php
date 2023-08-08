<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frondEndController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\BorrowerController;




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

Route::get('todo', [TodoController::class, 'myTodo'])->name('todo');

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

Route::get('investorEdit/{client_id}', [frondEndController::class, 'investorEdit'])->name('investor.edit');


//ajax route
Route::post('update-invoster', [frondEndController::class, 'updateInvoster'])->name('update.invoster');




Route::get('delete-investor/{client_id}', [frondEndController::class, 'deleteInverstor'])->name('investor.delete');



//todo  work as pendimg
Route::get('todoTask', [TodoController::class, 'todoTask'])->name('todo.task');
Route::post('todoAdd', [TodoController::class, 'todoAdd'])->name('todo.add');


//borrowers
Route::group(['prefix' => 'users', 'namespace' => 'Frontend'], function () {
    Route::get('borrowers', [BorrowerController::class, 'borrowers'])->name('user.borrowers');
    Route::get('borrowersAdd', [BorrowerController::class, 'borrowersAdd'])->name('borrower.add');
    Route::post('borrowersStore', [BorrowerController::class, 'borrowersStore'])->name('borrower.store');
});
