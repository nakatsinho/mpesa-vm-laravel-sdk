<?php 

namespace Nakatsinho\MpesaLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class MpesaSDK extends Facade{
    
    protected static function getFacadeAccessor()
    {
        return 'mpesa-sdk';
    }
}