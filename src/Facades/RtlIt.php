<?php
/**
 * Created by PhpStorm.
 * User: Maysam
 * Date: 10/7/2018
 * Time: 5:04 PM
 */

namespace Mimj\AzRast\Facades;

use Illuminate\Support\Facades\Facade;

class RtlIt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rtl_it';
    }
}