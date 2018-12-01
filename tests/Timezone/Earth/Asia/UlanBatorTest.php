<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\UlanBator,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UlanBatorTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UlanBator;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
