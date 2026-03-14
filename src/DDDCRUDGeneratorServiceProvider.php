<?php

namespace Raham\MyPackage;

use Illuminate\Support\ServiceProvider;
use Raham\MyPackage\TestCommand;

class DDDCRUDGeneratorServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
        TestCommand::class,
      ]);
    }
  }
}
