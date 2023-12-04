<?php

namespace Feooh\Slumdog;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    public function register() {

    }

}
