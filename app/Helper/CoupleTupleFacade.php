<?php
namespace App\Helper;
use Illuminate\Support\Facades\Facade;

class CoupleTupleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ct';
    }
}