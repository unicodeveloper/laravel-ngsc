<?php

namespace Unicodeveloper\Ngsc;

use Illuminate\Support\Facades\Facade;

class NgscFacade extends Facade {

    /**
   * Get the registered name of the component.
   *
   * @return string
   */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ngsc';
    }
}