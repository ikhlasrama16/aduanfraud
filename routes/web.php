<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('page.home');
Route::get('/pelaporan', [PagesController::class, 'pelaporan'])->name('page.pelaporan');
Route::get('/about', [PagesController::class, 'about'])->name('page.about');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'login_proccess'])->name('auth.loginprocess');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// routes/web.php

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
    'as' => 'admin.'
], function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    // Tambahkan route admin lainnya di sini
});
