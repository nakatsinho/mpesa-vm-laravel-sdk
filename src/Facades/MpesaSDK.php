<?php 

namespace Nakatsinho\MpesaLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Nakatsinho\MpesaLaravel\Files\Config\ServiceVM as MPesaService;

class MpesaSDK extends Facade{
    
    protected static function getFacadeAccessor()
    {
        // return 'mpesa-sdk';
        return MPesaService::class;
    }
}