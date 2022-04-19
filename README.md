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
But with that we didn't reach the icing on the cake, together with the package, there are a series of files that we need to publish in your project, which will allow you to access the features of that package, through the following command via artisan:
```
php artisan mpesa-sdk:publish
```

#### GOOD DJOB 🔥...

Now we have the basics to test! Note that the command above brought us the following files:
















Share and help improve... (coming soon)
