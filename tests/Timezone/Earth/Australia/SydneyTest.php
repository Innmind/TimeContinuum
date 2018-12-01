<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Sydney,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SydneyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sydney;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
