<?php
use Illuminate\Support\Facades\Route;
use App\Models\Book;//Bookモデルを使うよー
use Illuminate\Http\Request;//GETとPOSTとかの通信でデータ取り扱うよ
use App\Http\Controllers\BooksController;//追記

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



//TOPページ表示
Route::get('/', [BooksController::class, 'index']);

//新「本」を追加するURL
Route::post('books',[ BooksController::class,'store' ]);

//「本」を更新画面表示
Route::get('booksedit',[ BooksController::class,'edit' ]);

//「本」を更新処理
Route::post('books/update',[ BooksController::class,'update' ]);

//新「本」を削除するURL
Route::delete('book/{book}',[ BooksController::class,'destroy' ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

