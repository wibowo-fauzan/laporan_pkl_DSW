<?php

use App\Http\Controllers\AgendaHomeController;
use App\Http\Controllers\AgendaKegiatanController;
use App\Http\Controllers\AgendakegiatanDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaDanArtikelCotroller;
use App\Http\Controllers\BeritaDanArtikelDashboardController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexagendakegiatanController;
use App\Http\Controllers\IndexberitaandControllerController;
use App\Http\Controllers\IndexPegumumanController;
use App\Http\Controllers\IndexPengumumanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PendidikanDSWController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengumumanDashboardController;
use App\Http\Controllers\PerpustakaanDSWController;
use App\Http\Controllers\PetaDepokDSWController;
use App\Http\Controllers\PlnDSWController;
use App\Http\Controllers\TentangDSWController;
use App\Http\Controllers\TngglBlnThnController;
use App\Http\Controllers\TransportasiDSWController;
use App\Http\Middleware\CustomErrorPage;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/', [TngglBlnThnController::class, 'showEventCard']);
Route::get('/TentangDSW', [TentangDSWController::class, 'index']);
Route::get('/AgendaKegiatan', [AgendaKegiatanController::class, 'index']);
Route::get('/Pengumuman', [PengumumanController::class, 'index']);
Route::get('/Berita&Kegiatan', [BeritaDanArtikelCotroller::class, 'index']);
Route::get('/Contact-Me', [ContactMeController::class, 'index']);
Route::get('/Layanan', [LayananController::class, 'indexlayanan']);

// indexing BLOG
Route::get('/agenda/details/{id}', [IndexagendakegiatanController::class, 'showDetails']);
Route::get('/berita/detail/{id}', [IndexberitaandControllerController::class, 'showDetails']);
Route::get('/pengumuman/detail/{id}', [IndexPengumumanController::class, 'showDetails'])->name('pengumuman.page');
// indexing BLOG end

Route::get('/Layanan/Pln-DSW', [PlnDSWController::class, 'plndsw']);
Route::get('/Layanan/Pendidikan-DSW', [PendidikanDSWController::class, 'pendidikandsw']);
Route::get('/Layanan/Perpustakaan-DSW', [PerpustakaanDSWController::class, 'perpustakaandsw']);
Route::get('/Layanan/PetaDepok-DSW', [PetaDepokDSWController::class, 'petaDepokdsw']);
Route::get('/Layanan/Transportasi-DSW', [TransportasiDSWController::class, 'transportasidsw']);

Route::get('/login/admin', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/error', [CustomErrorPage::class, 'pathredirect']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);

    // agenda kegiatan dinamis
    Route::get('/admin/dashboard/dataagenda', [AgendakegiatanDashboardController::class, 'dataagenda'])->name('agendas.index');
    Route::get('/admin/dashboard/dataagenda-create', [AgendakegiatanDashboardController::class, 'create'])->name('agendas.create');
    Route::post('/admin/dashboard/dataagenda-store', [AgendakegiatanDashboardController::class, 'store'])->name('agendas.store');
    Route::get('/admin/dashboard/dataagenda/{id}/edit', [AgendakegiatanDashboardController::class, 'edit'])->name('agendas.edit');
    Route::put('/admin/dashboard/dataagenda-update/{id}', [AgendakegiatanDashboardController::class, 'update'])->name('agendas.update');
    Route::delete('/admin/dashboard/dataagenda-destroy/{id}', [AgendakegiatanDashboardController::class, 'destroy'])->name('agendas.destroy');
    Route::get('/admin/dashboard/dataagenda/{id}', [AgendakegiatanDashboardController::class, 'show'])->name('agendas.show');
    // agenda kegiatan dinamis end 

    // Pengumuman dinamis
    Route::get('/admin/dashboard/datapengumuman', [PengumumanDashboardController::class, 'datapengumuman'])->name('pengumuman.index');
    Route::get('/admin/dashboard/datapengumuman-create', [PengumumanDashboardController::class, 'create'])->name('pengumuman.create');
    Route::post('/admin/dashboard/datapengumuman-store', [PengumumanDashboardController::class, 'store'])->name('pengumuman.store');
    Route::get('/admin/dashboard/datapengumuman/{id}/edit', [PengumumanDashboardController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/admin/dashboard/datapengumuman-update/{id}', [PengumumanDashboardController::class, 'update'])->name('pengumuman.update');
    Route::delete('/admin/dashboard/datapengumuman-destroy/{id}', [PengumumanDashboardController::class, 'destroy'])->name('pengumuman.destroy');
    Route::get('/admin/dashboard/datapengumuman/{id}', [PengumumanDashboardController::class, 'show'])->name('pengumuman.show');
    // Pengumuman dinamis end

    // berita&artikel dinamis
    Route::get('/dashboard/beritadanartikel', [BeritaDanArtikelDashboardController::class, 'index'])->name('beritadanartikel.index');
    Route::get('/dashboard/beritadanartikel/create', [BeritaDanArtikelDashboardController::class, 'create'])->name('beritadanartikel.create');
    Route::post('/dashboard/beritadanartikel', [BeritaDanArtikelDashboardController::class, 'store'])->name('beritadanartikel.store');
    Route::get('/dashboard/beritadanartikel/{beritaAtikel}', [BeritaDanArtikelDashboardController::class, 'show'])->name('beritadanartikel.show');
    Route::get('/dashboard/beritadanartikel/{beritaAtikel}/edit', [BeritaDanArtikelDashboardController::class, 'edit'])->name('beritadanartikel.edit');
    Route::put('/dashboard/beritadanartikel/{beritaAtikel}', [BeritaDanArtikelDashboardController::class, 'update'])->name('beritadanartikel.update');
    Route::delete('/dashboard/beritadanartikel/{beritaAtikel}', [BeritaDanArtikelDashboardController::class, 'destroy'])->name('beritadanartikel.destroy');
    // berita&artikel dinamis end
});