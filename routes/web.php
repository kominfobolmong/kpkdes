<?php

use App\Http\Controllers\Admin\ApbdRekeningController;
use App\Http\Controllers\Admin\SubBidangController;
use App\Http\Controllers\Admin\ApbdSubRekeningController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExcelController;
use App\Http\Controllers\Admin\OpdController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\JenisController;
use App\Http\Controllers\Admin\BidangController;
use App\Http\Controllers\Admin\DesaController;
use App\Http\Controllers\Admin\HubunganController;
use App\Http\Controllers\Admin\PekerjaanController;
use App\Http\Controllers\Admin\NakesController;
use App\Http\Controllers\Admin\PanasBumiController;
use App\Http\Controllers\Admin\KabupatenController;
use App\Http\Controllers\Admin\SumberDanaController;
use App\Http\Controllers\Admin\PaudController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Admin\UsiaController;
use App\Http\Controllers\Admin\WaktuController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\PuskesmasController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\SubRekeningController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('kecamatan/get_data/', [KecamatanController::class, 'getData']);
    Route::get('penduduk/get_data/', [KecamatanController::class, 'getData']);
    Route::get('apbd_rekening/get_data/', [ApbdRekeningController::class, 'getData']);
    Route::get('apbd_sub_rekening/get_data/', [ApbdSubRekeningController::class, 'getData']);
    Route::get('bidang/get_data/', [BidangController::class, 'getData']);
    Route::get('desa/get_data/', [DesaController::class, 'getData']);
    Route::get('hubungan/get_data/', [HubunganController::class, 'getData']);
    Route::get('kabupaten/get_data/', [KabupatenController::class, 'getData']);
    Route::get('penduduk/get_data/', [KecamatanController::class, 'getData']);
    Route::get('pekerjaan/get_data/', [PekerjaanController::class, 'getData']);
    Route::get('rekening/get_data/', [RekeningController::class, 'getData']);
    Route::get('sub_bidang/get_data/', [SubBidangController::class, 'getData']);
    Route::get('sub_rekening/get_data/', [SubRekeningController::class, 'getData']);
    Route::get('sumber_dana/get_data/', [SumberDanaController::class, 'getData']);

    Route::resource('user', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('excel', ExcelController::class);

    Route::resource('apbd_rekening', ApbdRekeningController::class);
    Route::resource('apbd_sub_rekening', ApbdSubRekeningController::class);
    Route::resource('bidang', BidangController::class);
    Route::resource('desa', DesaController::class);
    Route::resource('hubungan', HubunganController::class);
    Route::resource('kabupaten', KabupatenController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('pekerjaan', PekerjaanController::class);
    Route::resource('penduduk', PendudukController::class);
    Route::resource('rekening', RekeningController::class);
    Route::resource('sub_bidang', SubBidangController::class);
    Route::resource('sub_rekening', SubRekeningController::class);
    Route::resource('sumber_dana', SumberDanaController::class);
});
