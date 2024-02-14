<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller\AgendakegiatanDashboardController;
use Closure;
use Illuminate\Support\Facades\Auth;

class CustomErrorPage
{
    public function handle($request, Closure $next)
    {
        // Tambahkan logika untuk menangani akses path yang diizinkan
        if (
            $request->is('/') ||
            $request->is('login/admin') ||
            $request->is('TentangDSW') ||
            $request->is('AgendaKegiatan') ||
            $request->is('Pengumuman') ||
            $request->is('Berita&Kegiatan') ||
            $request->is('Contact-Me') ||
            $request->is('error') ||
            $request->is('login') ||
            $request->is('logout') ||
            $request->is('admin/dashboard') ||
            // data agenda CRUD dashboard
            $request->is('admin/dashboard/dataagenda') ||
            $request->is('admin/dashboard/dataagenda-create') ||
            $request->is('admin/dashboard/dataagenda-store') ||
            $request->is('admin/dashboard/dataagenda-update/3') ||
            // data agenda CRUD dashboard end
            $request->is('admin/dashboard/datapengumuman') ||
            $request->is('Layanan') ||
            // replica
            $request->is('Layanan/Pln-DSW') ||
            $request->is('Layanan/Pendidikan-DSW-1') ||
            $request->is('Layanan/Perpustakaan-DSW-1') ||
            $request->is('Layanan/PetaDepok-DSW') ||
            $request->is('Layanan/Transportasi-DSW-1') ||

            $request->is('admin/dashboard/databeritapengumuman')
        ) {
            if (Auth::check() && $request->is('/')) {
                return redirect('/error');
            }

            return $next($request);
        }

        // Tampilkan tampilan kustom atau redirect ke halaman tertentu
        return response()->view('custom.error', [], 403);
    }

    public function pathredirect()
    {
        return view('custom.errdashboardlogout');
    }
}
