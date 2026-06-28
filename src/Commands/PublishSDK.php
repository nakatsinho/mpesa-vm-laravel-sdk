<?php

namespace Nakatsinho\MpesaLaravel\Commands;

use Illuminate\Console\Command;

class PublishSDK extends Command
{
    protected $signature = 'mpesa-sdk:publish';

    protected $description = 'Publishing files from the src folder';

    public function handle(): int
    {
        $appDir = app_path();
        $resDir = resource_path();
        $confDir = config_path();

        $paymentController = file_get_contents(__DIR__ . '/../Files/Controllers/PaymentController.stub');
        $this->createFile($appDir . DIRECTORY_SEPARATOR . 'Http/Controllers/', 'PaymentController.php', $paymentController);
        $this->info('Payment Controller was published.');

        $configMpesa = file_get_contents(__DIR__ . '/../Files/Config/Mpesa.stub');
        $this->createFile($confDir . DIRECTORY_SEPARATOR, 'mpesa.php', $configMpesa);
        $this->info('Config file was generated.');

        $bladeFile = file_get_contents(__DIR__ . '/../Files/Views/index.stub');
        $this->createFile($resDir . DIRECTORY_SEPARATOR, 'views/payments/index.blade.php', $bladeFile);
        $this->info('Blade view was generated.');

        $this->info('Done! Enjoy your SDK.');

        return self::SUCCESS;
    }

    public static function createFile(string $path, string $fileName, string $contents): void
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        file_put_contents($path . $fileName, $contents);
    }
}
