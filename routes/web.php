<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/inbox', [InboxController::class, 'getEmails'])->name('inbox');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/newMessages', [MessageController::class, 'sendMessages']);
Route::get('/newMessages', [MessageController::class, 'showMessageForm'])->name('newMessages');

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);

Route::get('/login/author', [LoginController::class, 'showAuthorLoginForm']);
Route::post('/login/author', [LoginController::class, 'authorLogin']);

Route::get('register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::post('register/admin', [RegisterController::class, 'createAdmin']);

Route::get('register/author', [RegisterController::class, 'showAuthorRegisterForm']);
Route::post('register/author', [RegisterController::class, 'createAuthor']);

Route::get('register/addUser', [RegisterController::class, 'showAddUserForm']);
Route::post('register/addUser', [RegisterController::class, 'addUser']);

Route::get("deleteUser/{id}", [UserController::class, 'deleteUser']);
Route::get("deleteAdmin/{id}", [UserController::class, 'deleteAdmin']);
Route::get("deleteAuthor/{id}", [UserController::class, 'deleteAuthor']);

Route::get("deleteMessage/{id}", [MessageController::class, 'deleteMessage']);

Route::get("updateMessage/{id}", [MessageController::class, 'showUpdate']);
Route::post("updateMessage/{id}", [MessageController::class, 'updateMessage']);

Route::group(['middleware' => 'auth:author'], function () {
    Route::get('/author', [MessageController::class, 'showAllMessage']);
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin',[UserController::class, 'getUsers']);
});

Route::group(['middleware' => 'auth:web'], function () {
    Route::view('/user', 'user');
});


Route::get('logout', [LoginController::class, 'logout']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('edit.user');
Route::patch('/update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');

Route::get('/edit-admin/{id}', [UserController::class, 'editAdmin'])->name('edit.admin');
Route::patch('/update-admin/{id}', [UserController::class, 'updateAdmin'])->name('update.admin');

Route::get('/edit-author/{id}', [UserController::class, 'editAuthor'])->name('edit.author');
Route::patch('/update-author/{id}', [UserController::class, 'updateAuthor'])->name('update.author');
