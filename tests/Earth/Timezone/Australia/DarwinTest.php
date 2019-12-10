<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Darwin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DarwinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Darwin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
