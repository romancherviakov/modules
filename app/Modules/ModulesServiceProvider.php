<?php

namespace App\Modules;

class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $modules = config("module.modules");

        while(list(,$module) = each($modules)) {
            
            // load routes for each modules
            if(file_exists(__DIR__ . '/' . $module . '/routes.php')) {
                require __DIR__ . '/' . $module . '/routes.php';
            }

            // load all views
            if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
            }
        }
    }

    public function register()
    {
        //
    }
}
