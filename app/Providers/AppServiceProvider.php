<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Brand;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // PENTING: Jangan lakukan DB query langsung saat boot().
        // View::composer men-defer eksekusi callback ke saat view di-render,
        // sehingga DB query TIDAK dijalankan saat artisan/composer bootstrap.
        View::composer('layouts.app', function ($view) {
            try {
                $view->with('brands', Brand::all());
            } catch (\Exception $e) {
                // Database tidak tersedia, kirim koleksi kosong
                $view->with('brands', collect());
            }
        });
    }
}