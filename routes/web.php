<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\Absensi;
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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/attendance/entry', [Absensi::class, 'showEntryAttendance']);
Route::get('/attendance/exit', [Absensi::class, 'showExitAttendance']);

Route::post('/attendance/entry', [Absensi::class, 'entryAttendance'])->name('attendance.entry');
Route::post('/attendance/exit', [Absensi::class, 'exitAttendance'])->name('attendance.exit');



// Route::prefix('/dashboard')->middleware(['role:admin, pj'])->group(function () {
//   Route::get('/', function () {
//       return view('dashboard');
//     });
// });

// Route::get('/dashboard', function () {
//   return view('dashboard');
// });
