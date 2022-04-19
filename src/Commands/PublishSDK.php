<?php 

namespace Nakatsinho\MpesaLaravel\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;


class PublishSDK extends Command{


    protected $name = 'mpesa-sdk:publish';

    protected $description = 'Publish files from the src folder';

    public $composer;


    public function __construct()
    {
        parent::__construct();

        $this->composer = app()['composer'];
    }

    public function handle(){

        $publicDir = public_path();
        $appDir = app_path();
        $resDir =  resource_path();
        $confDir =  config_path();
        $dataDir = database_path();

        $paymentController = file_get_contents(__DIR__.'/../Files/Controllers/PaymentController.stub');
        $this->createFile($appDir. DIRECTORY_SEPARATOR."Http/Controllers/", 'PaymentController.php', $paymentController);
        $this->info('Payment Controller was published right now.');

        $configMpesa = file_get_contents(__DIR__.'/../Files/Config/Mpesa.stub');
        $this->createFile($confDir. DIRECTORY_SEPARATOR."", 'mpesa.php', $configMpesa);
        $this->info('We have generated a fresh config service file.');

        $this->info('Generating fresh autoload files...');
        $this->composer->dumpOptimized();

        $this->info('Awesome Shit...! Enjoy your SDK.');
    }

    public static function createFile($path, $fileName, $contents)
    {
        if(!file_exists($path)){
            mkdir($path, 0755, true);
        }

        $path = $path.$fileName;

        file_put_contents($path, $contents);
    }
}