<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Tasmania,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TasmaniaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tasmania;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
