<?php

use App\Http\Controllers\admin\AkreditasController as AdminAkreditasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DosenprofController;
use App\Http\Controllers\admin\KurikulumController as AdminKurikulumController;
use App\Http\Controllers\admin\PimpinanprofController;
use App\Http\Controllers\admin\publikasi\KegiatanController as PublikasiKegiatanController;
use App\Http\Controllers\admin\publikasi\VideoController;
use App\Http\Controllers\admin\RuangkelasController as AdminRuangkelasController;
use App\Http\Controllers\admin\RuanglabController as AdminRuanglabController;
use App\Http\Controllers\admin\StafController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\AkreditasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\PimpinanController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\client\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\client\JurnalController;
use App\Http\Controllers\client\KegiatanController;
use App\Http\Controllers\client\KelasController;
use App\Http\Controllers\client\KurikulumController;
use App\Http\Controllers\client\LabController;
use App\Http\Controllers\client\TeknisiController;

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
//login 
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [HomeController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);


Route::get('/', [ClientController::class, 'showHome']);
Route::get('about/pimpinan', [PimpinanController::class, 'showPimpinan']);
Route::get('about/dosen', [DosenController::class, 'index']);
Route::get('about/teknisi', [TeknisiController::class, 'index']);
Route::get('about/lab', [LabController::class, 'index']);
Route::get('about/kelas', [KelasController::class, 'index']);
Route::get('about/kurikulum', [KurikulumController::class, 'index']);
Route::get('about/akreditas', [AkreditasController::class, 'index']);
Route::get('about/jurnal', [JurnalController::class, 'index']);
Route::get('kegiatan/{kegiatan}', [KegiatanController::class, 'index']);

//Route::middleware('auth')->group(function () {

Route::get('/beranda', [HomeController::class, 'index']);
//admin
Route::prefix('admin')->group(function () {

    Route::get('user', [UserController::class, 'getDataUser']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user/{user}/edit', [UserController::class, 'edit']);
    Route::put('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'delete']);

    Route::get('ruangkelas', [AdminRuangkelasController::class, 'getDataRuangKelas']);
    Route::get('ruangkelas/create', [AdminRuangkelasController::class, 'create']);
    Route::post('ruangkelas', [AdminRuangkelasController::class, 'store']);
    Route::get('ruangkelas/{ruangkelas}', [AdminRuangkelasController::class, 'show']);
    Route::get('ruangkelas/{ruangkelas}/edit', [AdminRuangkelasController::class, 'edit']);
    Route::put('ruangkelas/{ruangkelas}', [AdminRuangkelasController::class, 'update']);
    Route::delete('ruangkelas/{ruangkelas}', [AdminRuangkelasController::class, 'delete']);

    Route::get('ruanglab', [AdminRuanglabController::class, 'getDataRuanglab']);
    Route::get('ruanglab/create', [AdminRuanglabController::class, 'create']);
    Route::post('ruanglab', [AdminRuanglabController::class, 'store']);
    Route::get('ruanglab/{ruanglab}', [AdminRuanglabController::class, 'show']);
    Route::get('ruanglab/{ruanglab}/edit', [AdminRuanglabController::class, 'edit']);
    Route::put('ruanglab/{ruanglab}', [AdminRuanglabController::class, 'update']);
    Route::delete('ruanglab/{ruanglab}', [AdminRuanglabController::class, 'delete']);

    Route::get('pimpinanprof', [PimpinanprofController::class, 'getDataPimpinanprof']);
    Route::get('pimpinanprof/create', [PimpinanprofController::class, 'create']);
    Route::post('pimpinanprof', [PimpinanprofController::class, 'store']);
    Route::get('pimpinanprof/{pimpinanprof}', [PimpinanprofController::class, 'show']);
    Route::get('pimpinanprof/{pimpinanprof}/edit', [PimpinanprofController::class, 'edit']);
    Route::put('pimpinanprof/{pimpinanprof}', [PimpinanprofController::class, 'update']);
    Route::delete('pimpinanprof/{pimpinanprof}', [PimpinanprofController::class, 'delete']);

    Route::get('dosenprof', [DosenprofController::class, 'getDataDosenprof']);
    Route::get('dosenprof/create', [DosenprofController::class, 'create']);
    Route::post('dosenprof', [DosenprofController::class, 'store']);
    Route::get('dosenprof/{dosenprof}', [DosenprofController::class, 'show']);
    Route::get('dosenprof/{dosenprof}/edit', [DosenprofController::class, 'edit']);
    Route::put('dosenprof/{dosenprof}', [DosenprofController::class, 'update']);
    Route::delete('dosenprof/{dosenprof}', [DosenprofController::class, 'delete']);

    Route::get('staf', [StafController::class, 'getDataStaf']);
    Route::get('staf/create', [StafController::class, 'create']);
    Route::post('staf', [StafController::class, 'store']);
    Route::get('staf/{staf}', [StafController::class, 'show']);
    Route::get('staf/{staf}/edit', [StafController::class, 'edit']);
    Route::put('staf/{staf}', [StafController::class, 'update']);
    Route::delete('staf/{staf}', [StafController::class, 'delete']);

    Route::get('kurikulum', [AdminKurikulumController::class, 'getDataKurikulum']);
    Route::get('kurikulum/create', [AdminKurikulumController::class, 'create']);
    Route::post('kurikulum', [AdminKurikulumController::class, 'store']);
    Route::get('kurikulum/{kurikulum}', [AdminKurikulumController::class, 'show']);
    Route::get('kurikulum/{kurikulum}/edit', [AdminKurikulumController::class, 'edit']);
    Route::put('kurikulum/{kurikulum}', [AdminKurikulumController::class, 'update']);
    Route::delete('kurikulum/{kurikulum}', [AdminKurikulumController::class, 'delete']);

    Route::get('akreditas', [AdminAkreditasController::class, 'getDataAkreditas']);
    Route::get('akreditas/create', [AdminAkreditasController::class, 'create']);
    Route::post('akreditas', [AdminAkreditasController::class, 'store']);
    Route::get('akreditas/{akreditas}', [AdminAkreditasController::class, 'show']);
    Route::get('akreditas/{akreditas}/edit', [AdminAkreditasController::class, 'edit']);
    Route::put('akreditas/{akreditas}', [AdminAkreditasController::class, 'update']);
    Route::delete('akreditas/{akreditas}', [AdminAkreditasController::class, 'delete']);

    Route::get('kegiatan', [PublikasiKegiatanController::class, 'getDataKegiatan']);
    Route::get('kegiatan/create', [PublikasiKegiatanController::class, 'create']);
    Route::post('kegiatan', [PublikasiKegiatanController::class, 'store']);
    Route::get('kegiatan/{kegiatan}', [PublikasiKegiatanController::class, 'show']);
    Route::get('kegiatan/{kegiatan}/edit', [PublikasiKegiatanController::class, 'edit']);
    Route::put('kegiatan/{kegiatan}', [PublikasiKegiatanController::class, 'update']);
    Route::delete('kegiatan/{kegiatan}', [PublikasiKegiatanController::class, 'delete']);
});
//});
