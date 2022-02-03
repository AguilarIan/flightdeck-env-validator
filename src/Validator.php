<?php 
declare(strict_types=1);

namespace CSDEVS\FlightdeckEnvValidator;

use CSDEVS\FlightdeckEnvValidator\Interfaces\ValidatorInterface;

class Validator implements ValidatorInterface
{
    private function __construct() { }

    public static function check(): bool
    {
        try {
            if (
                getenv("FD_GUARD_URL") != '' 
                || getenv("FD_GUARD_URL") != NULL
            ) {
                return true;
            } 
        } catch (\Exception $e) {
            $message = 'Caught exception: ' . $e->getMessage() . "\n";
            return false;
        }
    }
}