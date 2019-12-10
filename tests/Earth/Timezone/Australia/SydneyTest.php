<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Sydney,
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
