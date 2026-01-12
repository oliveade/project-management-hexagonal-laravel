<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Project\Repository\ProjectRepository;
use App\Infrastructure\Persistence\EloquentProjectRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProjectRepository::class,
            EloquentProjectRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
