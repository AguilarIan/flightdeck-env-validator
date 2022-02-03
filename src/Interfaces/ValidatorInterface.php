<?php 
declare(strict_types=1);
namespace CSDEVS\FlightdeckEnvValidator\Interfaces;

interface ValidatorInterface 
{
    /** 
     * Return boolean value to check if global variable exists
     *
     * @return bool
    **/
    public static function check(): bool;
}