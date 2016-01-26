<?php

namespace Unicodeveloper\Ngsc;

use Illuminate\Support\ServiceProvider;

class NgscServiceProvider extends ServiceProvider {

  /*
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
      $this->app->bind('laravel-ngsc', function() {

          return new Ngsc;

      });
  }

  /**
   * Get the services provided by the provider
   * @return array
   */
  public function provides()
  {
      return ['laravel-ngsc'];
  }
}