<?php 
declare(strict_types=1);

namespace CSDEVS\FlightdeckEnvValidator;

use CSDEVS\FlightdeckEnvValidator\Interfaces\ValidatorInterface;
use Symfony\Component\Dotenv\Dotenv;

class Validator implements ValidatorInterface
{
    private function __construct() { }

    public static function check(): bool
    {
        $dotenv = new Dotenv();
        $dotenv->load('/home/iana/Desktop/Library /flightdeck-env-validator' . '/.env');
        
        try {
            if (
                $_ENV["FD_GUARD_URL"] != '' 
                || $_ENV["FD_GUARD_URL"] != NULL
            ) {
                return true;
            } 
        } catch (\Exception $e) {
            $message = 'Caught exception: ' . $e->getMessage() . "\n";
            return false;
        }
    }
}