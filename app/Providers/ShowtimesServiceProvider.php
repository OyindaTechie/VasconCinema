<?php

namespace App\Providers;

use App\Repositories\showtimeRepository;
use App\Repositories\Interfaces\showtimeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ShowtimesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
        $this->app->bind(
            showtimeRepositoryInterface::class, 
            showtimeRepository::class
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
