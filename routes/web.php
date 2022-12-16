<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])
                                                                ->name('admin.home')
                                                                ->middleware('is_admin');

//pengelolaan buku
Route::get('admin/books', [App\Http\Controllers\AdminController::class, 'book'])
                                                                ->name('admin.books')
                                                                ->middleware('is_admin');
Route::post('admin/books', [App\Http\Controllers\AdminController::class, 'submit_book'])
                                                                ->name('admin.book.submit')
                                                                ->middleware('is_admin');
Route::patch('admin/books/update', [App\Http\Controllers\AdminController::class, 'update_book'])
                                                                ->name('admin.book.update')
                                                                ->middleware('is_admin');
Route::get('admin/ajaxadmin/dataBuku/{id}', [App\Http\Controllers\AdminController::class, 'getDataBuku']);
Route::delete('admin/books/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_book'])
                                                                ->name('admin.book.delete')
                                                                ->middleware('is_admin');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::get('admin/print_books', [App\Http\Controllers\AdminController::class, 'print_books'])
                                                                ->name('admin.print.books')
                                                                ->middleware('is_admin');
Route::get('admin/books/export', [App\Http\Controllers\AdminController::class, 'export'])
                                                                ->name('admin.book.export')
                                                                ->middleware('is_admin');

