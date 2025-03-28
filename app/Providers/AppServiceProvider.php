<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Menu;
use App\Repositories\Interfaces\MedicRepositoryInterface;
use App\Repositories\MedicRepository;
use App\Repositories\ClinicRepository;
use App\Repositories\SicknessRepository;
use App\Repositories\TreatmentRepository;
use App\Repositories\Contracts\BaseRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(BaseRepositoryInterface::class, ClinicRepository::class);
        $this->app->bind(MedicRepositoryInterface::class, MedicRepository::class);
        $this->app->bind(BaseRepositoryInterface::class, SicknessRepository::class);
        $this->app->bind(BaseRepositoryInterface::class, TreatmentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('menu', Menu::class);
    }
    
}
