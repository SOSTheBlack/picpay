<?php

namespace App\Providers;

use App\Repositories\Contracts\ConsumerRepository;
use App\Repositories\Contracts\SellerRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Eloquent\ConsumerRepositoryEloquent;
use App\Repositories\Eloquent\SellerRepositoryEloquent;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 *
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(SellerRepository::class, SellerRepositoryEloquent::class);
        $this->app->bind(ConsumerRepository::class, ConsumerRepositoryEloquent::class);
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot(): void
    {
       //
    }
}
