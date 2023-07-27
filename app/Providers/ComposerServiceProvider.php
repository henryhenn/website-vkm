<?php

namespace App\Providers;

use App\View\SidebarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('components.dashboard-sidebar', SidebarComposer::class);
    }

    public function register()
    {

    }
}
