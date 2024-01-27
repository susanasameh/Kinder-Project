<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\view\composers\NavbarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (!$this->app->environment('production')) {
            $this->app->register('App\Providers\FakerServiceProvider');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


       View::composer('admin.includes.navbar', NavbarComposer::class);

        //Or write the code here without extar files
        // View::composer('admin.includes.navbar', function ($view) {
        //     $unreadMessage = Contact::where('unreadMessage', 0)->count();
        //     //session
        //     $view->with("unreadMessage", $unreadMessage);
        // });

        // Fixing Bootstrap Pagination Style
        Paginator::useBootstrap();


    }
}
