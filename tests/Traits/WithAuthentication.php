<?php
namespace Tests\Traits;

use App\Models\Role;
use Laravel\Sanctum\Sanctum;

trait WithAuthentication
{
    protected function attemptAuthenticate()
    {
        Sanctum::actingAs(
            Role::namespace( 'admin' )->users->first(),
            ['*']
        );
    }
}