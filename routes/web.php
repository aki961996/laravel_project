<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frondEndController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\LoginController;






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



//login
Route::get('login', [LoginController::class, 'loginPage'])->name('login');
Route::post('do-login', [LoginController::class, 'doLogin'])->name('do.login');


//
Route::middleware(['login_verified'])->group(function () {

    Route::get('home', [frondEndController::class, 'homePage'])->name('home');

    Route::get('do-logout', [LoginController::class, 'doLogout'])->name('do.logout');
    Route::get('about', [frondEndController::class, 'aboutPage'])->name('about');
    Route::get('contact', [frondEndController::class, 'contactPage'])->name('contact');
    Route::get('todo', [TodoController::class, 'myTodo'])->name('todo');
    // Route::get('loans', [frondEndController::class, 'loanPage'])->name('loan');

    //userviewview-user
    Route::get('viewUser/{user_id}', [frondEndController::class, 'viewUser'])->name('view-user');


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
    //todoedit
    Route::get('todo-edit/{todo_id}', [TodoController::class, 'todoEdit'])->name('todo-edit');
    //todo-update
    Route::post('todo-update', [TodoController::class, 'todoUpdate'])->name('todo-update');

    //borrowers
    Route::group(['prefix' => 'users', 'namespace' => 'Frontend'], function () {
        Route::get('borrowers', [BorrowerController::class, 'borrowers'])->name('user.borrowers');
        Route::get('borrowersAdd', [BorrowerController::class, 'borrowersAdd'])->name('borrower.add');
        Route::post('borrowersStore', [BorrowerController::class, 'borrowersStore'])->name('borrower.store');
        Route::get('borrowers-edit/{borrowe_id}', [BorrowerController::class, 'borrowersEdit'])->name('borrower.edit');
        Route::post('borrowers-update', [BorrowerController::class, 'borrowersUpdate'])->name('borrower.update');
    });
});


//



//test route
Route::get('q', [TodoController::class, 'qu']);
