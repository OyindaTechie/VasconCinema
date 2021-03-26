<?php

namespace App\Providers;


use App\Repositories\cinemaRepository;
use App\Repositories\Interfaces\cinemaRepositoryInterface;
use Illuminate\Support\ServiceProvider;


class CinemaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            cinemaRepositoryInterface::class, 
            cinemaRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
