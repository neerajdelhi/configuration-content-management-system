<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use App\View\Components\AdminLayout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ... other boot method code ...

        Gate::define('access-admin', function ($user) {
            // Define your logic to determine if a user can access the admin area
            // For example:
            return $user->hasRole('admin');
        });

        // Define a gate for managing partners
        Gate::define('manage-partners', function ($user) {
            return $user->roles->contains('name', 'admin');
        });

        Blade::component('admin-layout', AdminLayout::class);
    }
}
