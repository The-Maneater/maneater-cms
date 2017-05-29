<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 5/27/17
 * Time: 7:54 PM
 */

namespace Tests;


use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}