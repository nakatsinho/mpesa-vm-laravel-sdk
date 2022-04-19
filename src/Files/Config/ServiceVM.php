<?php 

namespace Nakatsinho\MpesaLaravel\Files\Config;

use Nakatsinho\MpesaPhp\Transaction;
use Nakatsinho\MpesaPhp\Config;
use Nakatsinho\MpesaPhp\interfaces\TransactionResponseInterface;

class ServiceVM
{
    protected $transaction;

    protected $configPath;

    public function __construct(string $configPath = null)
    {
        $this->configPath = $configPath ?? config_path('mpesa.php');
        $this->transaction = new Transaction(Config::loadFromFile($this->configPath));
    }

    public function __call(string $name, array $arguments): TransactionResponseInterface
    {
        return call_user_func_array([$this->transaction, $name], $arguments);
    }
}