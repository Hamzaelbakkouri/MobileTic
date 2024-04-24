<?php

namespace App\Providers;

use App\Repositories\implementations\CategoryRepository;
use App\Repositories\interfaces\CategoryRepoInterface;
use App\Services\implementations\CategoryServiceImpl;
use App\Services\Specs\CategoryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryService::class, CategoryServiceImpl::class);
        $this->app->bind(CategoryRepoInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
