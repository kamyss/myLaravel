<?php

namespace App\Http\Facades;

class Test extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return '\App\Http\Model\Users';
    }
}