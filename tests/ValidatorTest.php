<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use CSDEVS\FlightdeckEnvValidator\Validator;

class ValidatorTest extends TestCase
{
    /** 
     * @test 
     **/
    public function validateEnv()
    {
        $validator = Validator::check();

        $this->assertIsBool($validator);
        $this->assertEquals(true, $validator);
    }
}
