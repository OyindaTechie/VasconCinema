<?php

namespace App\Providers;

use App\Repositories\movieRepository;
use App\Repositories\Interfaces\movieRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            movieRepositoryInterface::class, 
            movieRepository::class
          
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
