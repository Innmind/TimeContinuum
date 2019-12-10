<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Tasmania,
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
