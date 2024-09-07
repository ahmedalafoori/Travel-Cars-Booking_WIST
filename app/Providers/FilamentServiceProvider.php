<?php

namespace App\Providers;
use Filament\Facades\Filament;
use App\Filament\Resources\RoleResource;
use App\Filament\Resources\PermissionResource;
use App\Filament\Resources\UserResource;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerResources([
                RoleResource::class,
                PermissionResource::class,
                UserResource::class,
            ]);
        });
    }
}
