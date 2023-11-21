<?php

use App\Http\Controllers\Admin\ApbdRekeningController;
use App\Http\Controllers\Admin\SubBidangController;
use App\Http\Controllers\Admin\TenagaKerjaController;
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
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Admin\UsiaController;
use App\Http\Controllers\Admin\WaktuController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\PuskesmasController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\ItemPekerjaanController;
use App\Http\Controllers\Admin\RealisasiAnggaranController;
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
Route::get('/pkt/{id?}', [HomeController::class, 'pkt']);
Route::get('/desa/{id?}/{tahun?}', [HomeController::class, 'desa']);
Route::get('/get_grafik_pkt', [HomeController::class, 'getGrafikPkt'])->name('get_grafik_pkt');
Route::get('/get_grafik_tenaga_kerja', [HomeController::class, 'getGrafikTenagaKerja'])->name('get_grafik_tenaga_kerja');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('kecamatan/get_data/', [KecamatanController::class, 'getData']);
    Route::get('kecamatan/get_list_kecamatan/{id}', [KecamatanController::class, 'getList']);
    Route::get('penduduk/get_data/', [KecamatanController::class, 'getData']);
    Route::get('apbd_rekening/get_data/', [ApbdRekeningController::class, 'getData']);
    Route::get('apbd_rekening/get_apbd_rekening/{id}/{tahun}', [ApbdRekeningController::class, 'getApbdRekening']);
    Route::get('realisasi_anggaran/get_data/', [RealisasiAnggaranController::class, 'getData']);
    Route::get('tenaga_kerja/get_data/', [TenagaKerjaController::class, 'getData']);
    Route::get('bidang/get_data/', [BidangController::class, 'getData']);
    Route::get('desa/get_data/', [DesaController::class, 'getData']);
    Route::get('desa/get_list_desa/{id}', [DesaController::class, 'getList']);
    Route::get('hubungan/get_data/', [HubunganController::class, 'getData']);
    Route::get('kabupaten/get_data/', [KabupatenController::class, 'getData']);
    Route::get('penduduk/get_data/', [PendudukController::class, 'getData']);
    Route::get('penduduk/get_penduduk/{id}', [PendudukController::class, 'getPenduduk']);
    Route::get('pekerjaan/get_data/', [PekerjaanController::class, 'getData']);
    Route::get('rekening/get_data/', [RekeningController::class, 'getData']);
    Route::get('sub_bidang/get_data/', [SubBidangController::class, 'getData']);
    Route::get('sub_bidang/get_list_sub_bidang/{id}', [SubBidangController::class, 'getList']);
    Route::get('item_pekerjaan/get_data/', [ItemPekerjaanController::class, 'getData']);
    Route::get('item_pekerjaan/get_list_item_pekerjaan/{id}', [ItemPekerjaanController::class, 'getList']);
    Route::get('sumber_dana/get_data/', [SumberDanaController::class, 'getData']);

    Route::resource('user', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('excel', ExcelController::class);

    Route::resource('apbd_rekening', ApbdRekeningController::class);
    Route::resource('tenaga_kerja', TenagaKerjaController::class);
    Route::resource('bidang', BidangController::class);
    Route::resource('desa', DesaController::class);
    Route::resource('hubungan', HubunganController::class);
    Route::resource('kabupaten', KabupatenController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('pekerjaan', PekerjaanController::class);
    Route::resource('penduduk', PendudukController::class);
    Route::resource('rekening', RekeningController::class);
    Route::resource('sub_bidang', SubBidangController::class);
    Route::resource('item_pekerjaan', ItemPekerjaanController::class);
    Route::resource('sumber_dana', SumberDanaController::class);
    Route::resource('realisasi_anggaran', RealisasiAnggaranController::class);
});
