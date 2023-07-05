<?php

namespace NoorMaulida\GitActivity;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (!app()->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__ . '/../config/git_activity.php', 'git_activity');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (app()->runningInConsole()) {
            if (GitActivity::shouldRunMigrations()) {
                $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            }

            $this->publishes([
                __DIR__ . '/../database/migrations' => database_path('migrations'),
            ], 'git-activity-migrations');

            $this->publishes([
                __DIR__ . '/../config/git_activity.php' => config_path('git_activity.php'),
            ], 'git-activity-config');
        }
    }
}