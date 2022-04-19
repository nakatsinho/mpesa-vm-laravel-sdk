# Laravel Package for Mpesa - Vodacom Mozambique 🇲🇿
This is the latest simplified way to embed Mpesa payments for Mozambique in your Laravel app. And this is an improvement from past integrations already tested.

## M-Pesa Developer Portal
I consider it essential to read a little more about the working principle of this SDK, accessing the following link: <a href="https://developer.mpesa.vm.co.mz/documentation/" target="_blank">VM - Developer Portal</a>
## Pilot of you Laravel Project
First consider important/mandatory that your project fulfills the following requirements, required for the execution of this package

#### Requisitos:
- PhP Version : >= 7.0;
- Laravel Framework : >= 5.8;


## Package Installation:
0. If you haven't created your project yet, create your laravel project with the following steps, using Composer on the command line:
```
composer create-project laravel/laravel:^8.0 example-app
```
1. Navigate to your project's root directory and using composer on the command line, write the following:
```
composer require nakatsinho/mpesa-laravel
```
2. But with that we didn't reach the icing on the cake, together with the package, there are a series of files that we need to publish in your project, which will allow you to access the features of that package, through the following command via artisan:

```
php artisan mpesa-sdk:publish
```

#### GOOD DJOB 🔥...

Now we have the basics to test! Note that the command above brought us the following files:
- **config/mpesa.php** - The config file that help you to place your M-Pesa Credentials that can be find on VM Portal, just for test;
- **controllers/PaymentController.php** - A controller to call the payment form and make request;
- **views/payments/index.blade.php** - A Blade view with any form to make test request for c2b method;

## Explanation and Configuration:

Be sure to get and set your files like those following:
#### config/mpesa.php

```
<?php

return [
    'public_key' => env('MPESA_PUBLIC_KEY'),
    'api_host' => env('MPESA_API_HOST'),
    'api_key' => env('MPESA_API_KEY'),
    'origin' => env('MPESA_ORIGIN'),
    'service_provider_code' => env('MPESA_SERVICE_PROVIDER_CODE'),
    'initiator_identifier' => env('MPESA_INITIATOR_IDENTIFIER'),
    'security_credential' => env('MPESA_SECURITY_CREDENTIAL')
];

```
#### In you '.env' must be like this...

```
MPESA_PUBLIC_KEY="XXX XXXXXX XXXXXX" - You will obtain this on VM Portal
MPESA_API_HOST="api.sandbox.vm.co.mz" - Leave it
MPESA_API_KEY="XXX XXXXXX XXXXXX" - You will obtain this on VM Portal
MPESA_ORIGIN="XXX XXXXXX XXXXXX" - You will obtain this on VM Portal
MPESA_SERVICE_PROVIDER_CODE=(Random 6 digits)
MPESA_INITIATOR_IDENTIFIER="XXXXX XXX XXXXX"
MPESA_SECURITY_CREDENTIAL="XXXX XXXX XXXX"
```

After that, go to you <b>routes/web.php</b> file and place this
```
Route::resource('payment',PaymentController::class);
```

#### And Hozaaaa 🔥 🔥 🔥... "É fácil!"

Just type this on you terminal:
```
php -S localhost:8030 -t public/
```

Open you Browser, and type http://127.0.0.1:8030/payment !!! ENJOY...

## Dependence & Authors
It would be great to receive criticisms and new suggestions as a way to help improve this package, which is still under development!
And my credits go to **abdulmuied**, responsible for building the main SDK in PhP...

**Powered by** <a href="https://github.com/nakatsinho">Kelton Mauro Cumbe 🇲🇿</a>, aka **The Problems Solver** ! WhatsApp me <a href="https://wa.me/+258825248888"> any time </a>.
    













Share and help me to improve... (stable version coming soon)
