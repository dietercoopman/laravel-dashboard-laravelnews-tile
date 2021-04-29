<?php

namespace DieterCoopman\LaravelNewsTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelNewsTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('laravelnews-tile', LaravelNewsTileComponent::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-laravelnews-tile');
    }
}
