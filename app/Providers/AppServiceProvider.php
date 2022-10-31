<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\OportunidadeService;
use App\Services\OportunidadeServiceInterface;
use App\Repositories\OportunidadeRepository;
use App\Repositories\OportunidadeRepositoryInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OportunidadeServiceInterface::class, OportunidadeService::class);
        $this->app->bind(OportunidadeRepositoryInterface::class, OportunidadeRepository::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
