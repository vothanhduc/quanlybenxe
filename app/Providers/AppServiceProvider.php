<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\loai_san_pham;
use App\Models\hoa_si;
use App\Models\chu_de;

/// để không bị lỗi S4201 trong migrate

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            /// để không bị lỗi S4201 trong migrate
        Schema::defaultStringLength(191);

        view()->composer('page.layout', function ($view){
            $loai_sp = loai_san_pham::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('page.san-pham.list', function ($view){
            $hoasi = hoa_si::all();
            $view->with('hoasi', $hoasi);
        });

        view()->composer('page.san-pham.list', function ($view){
            $chude = chu_de::all();
            $view->with('chude', $chude);
        });

        view()->composer('page.tim-kiem.tim-kiem', function ($view){
            $hoasi = hoa_si::all();
            $view->with('hoasi', $hoasi);
        });

        view()->composer('page.tim-kiem.tim-kiem', function ($view){
            $chude = chu_de::all();
            $view->with('chude', $chude);
        });



    }
}
