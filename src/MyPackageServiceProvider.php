<?php

namespace APP\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
  public function register()
  {
    // $this->mergeConfigFrom(__DIR__.'/../config/my_package.php', 'my_package');

  }

  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'my_package');

    $this->publishes([
      __DIR__.'/../config/my_package.php' => config_path('my_package.php'),
    ]);
  }
}